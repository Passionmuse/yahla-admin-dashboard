//this object will handle all event of manage category / service portal
var manage_category = function () {
    //event register
    var register_event = {
        //each categories delete button event
        delete_category: function () {
            $('.delete').off('click', listen_event.delete_category);
            $('.delete').on('click', listen_event.delete_category);
        },
        //initizlize events
        init: function () {
            register_event.delete_category();
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
                    var category_id = e.target.parentElement.getAttribute('category-index');
                    send_request.delete_request(category_id);
                }
            });
        },
    }

    // send request to backend
    var send_request = {
        delete_request: function (category_id) {
            var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            alert(csrfToken);
            $.ajax({
                url: `/serviceportal/manage_categories/${category_id}`,
                type: 'DELETE',
                data: {
                    _token: csrfToken, // Include the CSRF token
                    id: category_id // Pass the ID of the item to be deleted
                },
                success: function (result) {
                    console.log('Delete request successful:', result);
                    // Optionally, remove the deleted item from the DOM or perform other UI updates
                },
                error: function (xhr, status, error) {
                    console.error('Delete request failed:', status, error);
                }
            });
        }
    }

    // some service functions 
    var service = {

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
