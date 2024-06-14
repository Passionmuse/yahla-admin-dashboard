
<form id="createForm" method="POST" action="{{ route('settings.bank-transfer.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputTitle">Bank Name</label>
                    <input type="text" id="inputTitle" class="form-control" placeholder="BANK NAME" name="bank_name">
                    @error('bank_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputTitle">Account Holder Name</label>
                    <input type="text" id="inputTitle" class="form-control" placeholder="HOLDER NAME" name="account_holder_name">
                    @error('account_holder_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputTitle">Account No</label>
                    <input type="text" id="inputTitle" class="form-control" placeholder="ACCOUNT NO" name="account_no">
                    @error('account_no')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputTitle">IBAN No</label>
                    <input type="text" id="inputTitle" class="form-control" placeholder="IBAN NO" name="iban_no">
                    @error('iban_no')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</form>

