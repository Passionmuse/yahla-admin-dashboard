//this object will handle all event of manage category / service portal
var manage_category = function () {
    //event register
    var register_event = {
        //each categories delete button event
        delete_category: function () {
            $('.delete').off('click', listen_event.delete_category);
            $('.delete').on('click', listen_event.delete_category);
        },
        //each categories edit button event.
        edit_category: function () {
            $('.edit-button').off('click', listen_event.edit_category);
            $('.edit-button').on('click', listen_event.edit_category);
        },
        //sending request for edit category event
        edit_request: function (form_id, modal_id) {
            $(`#${form_id}`).off('submit');
            $(`#${form_id}`).on('submit', function (event) {
                send_request.edit_request(event, modal_id);
            });
        },
        //initizlize events
        init: function () {
            register_event.delete_category();
            register_event.edit_category();
        }
    }
    // listen event
    var listen_event = {
        //category delete event listener
        delete_category: function (e) {
            Swal.fire({
                title: 'Are you sure?'
                , text: "Are you sure you want to delete this?"
                , icon: 'warning'
                , showCancelButton: true
                , confirmButtonText: 'Yes, delete it!'
                , customClass: {
                    confirmButton: 'btn btn-danger me-3'
                    , cancelButton: 'btn btn-label-secondary'
                }
                , buttonsStyling: false
            }).then(function (result) {
                if (result.value) {
                    var category_id = e.target.parentElement.parentElement.parentElement.getAttribute('category-index');
                    send_request.delete_request(category_id);
                }
            });
        },
        //edit category event listener.
        edit_category: function (e) {
            var current_category = e.target.parentElement.parentElement.parentElement;
            var edit_modal = document.getElementById('editCategoryForm');
            edit_modal.setAttribute('action', edit_modal.getAttribute('action') + current_category.getAttribute('category-index'));
            edit_modal.querySelector('#editCategoryName').value = current_category.querySelectorAll('td')[1].innerText;
            register_event.edit_request('editCategoryForm', 'editCategoryModal');
        },
    }

    // send request to backend
    var send_request = {
        //sending request for category delete
        delete_request: function (category_id) {
            var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            $.ajax({
                url: `/serviceportal/manage_categories/${category_id}`,
                type: 'DELETE',
                data: {
                    _token: csrfToken, // Include the CSRF token
                    id: category_id // Pass the ID of the item to be deleted
                },
                success: function (result) {
                    console.log('Delete request successful:', result);

                    var parent_id = document.querySelector(`[category-index="${category_id}"]`).parentElement.parentElement.id;
                    document.querySelector(`[category-index="${category_id}"]`).remove();

                    service.refresh_categorytable(parent_id);
                },
                error: function (xhr, status, error) {
                    console.error('Delete request failed:', status, error);
                }
            });
        },
        //send request for edite category
        edit_request: function (event, modal_id) {
            event.preventDefault(); // Prevent the default form submission
            $.ajax({
                url: event.target.getAttribute('action'),
                method: 'PUT',
                data: $(`#${modal_id} form`).serialize(),
                success: function (result) {
                    console.log('Update request successful:', result);
                    toastr.success('Update request successful!', 'success', {
                        positionClass: 'toast-top-right', // Position the notification at the top-right corner
                        closeButton: true, // Show a close button
                        timeOut: 5000 // Duration in milliseconds (e.g., 3000 ms = 3 seconds)
                    });
                    $(`#${modal_id}`).modal('hide');
                },
                error: function (xhr, status, error) {
                    console.error('Update request failed:', status, error);

                    toastr.error('Update request failed!', 'error', {
                        positionClass: 'toast-top-right', // Position the notification at the top-right corner
                        closeButton: true, // Show a close button
                        timeOut: 5000 // Duration in milliseconds (e.g., 3000 ms = 3 seconds)
                    });

                }
            });
        }
    }

    // some service functions 
    var service = {
        //After adding or deleting a category, refresh the category table to update the number of rows (tr elements).
        refresh_categorytable: function (table_id) {
            var table_body = document.getElementById(table_id).querySelector('tbody');

            var categories = table_body.querySelectorAll('tr');

            if (categories.length) {
                categories.forEach(function (element, index) {
                    element.querySelector('td').innerText = index + 1;
                    element.classList.remove('even', 'odd');
                    element.classList.add(index % 2 ? 'even' : 'odd');
                })
            }
        }
    }

    return {
        init: function () {
            register_event.init();
        }
    }
}();

$(document).ready(function () {
    manage_category.init();
})
