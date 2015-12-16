

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update User</h4>
                </div>
                <div class="modal-body">
                    <form id="updateForm" method="post">
                        <div class="form-group col-xs-12">
                            <label>Full Name</label>
                            <input type="text" name="fullName" value="" class="form-control" id="username">
                        </div>
                        <div class="form-group col-xs-12">
                            <label>Course</label>
                            <input type="text" name="Course" value="" class="form-control" id="usercourse">
                        </div>
                        <div class="form-group col-xs-12">
                            <label>Age</label>
                            <input type="text" name="Age" value="" class="form-control" id="userage">
                        </div>
                        <input type="hidden" name="id" value="" class="" id="userid">
                        <button type="submit" class="btn btn-info" id="Updateuser">Update</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

