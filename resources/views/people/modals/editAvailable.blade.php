<div class="modal fade" id="editAvailable_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Availability</h4>
      </div>
      <div class="modal-body">
          <form id="update-availability" class="" method="POST" action="update/user/{{ $user->id }}">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="availability">Availability</label>
              <input name="availability" type="text" id="update-availability" class="form-control" placeholder="What is your availability?">
            </div>
      </div>
      <div class="modal-footer">
        <button id="update-availability-submit" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </form>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>