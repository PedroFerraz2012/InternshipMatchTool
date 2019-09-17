        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <!--where the calendar comes-->
        <div id='calendar'></div>
        <!-- Modal View details-->
        <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Event Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <dl class="row">

                            <dt class="col-sm-3">Event Title: </dt>
                            <dd class="col-sm-9" id="title"></dd>
                            
                            <dt class="col-sm-3">To: </dt>
                            <dd class="col-sm-9" id="to_whom"></dd>

                            <dt class="col-sm-3">Date: </dt>
                            <dd class="col-sm-9" id="start"></dd>

                            <dt class="col-sm-3">Content: </dt>
                            <dd class="col-sm-9" id="content"></dd>

                            <dt class="col-sm-3">Status</dt>
                            <dd class="col-sm-9" id="status"></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
<!-- Modal add -->
        <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Event</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span id="msg-cad"></span>
                        <form id="addevent" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Event Title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">To</label>
                                <div class="col-sm-10">
                                    <input type="text" name="to_whom" class="form-control" id="to_whom" placeholder="to whom?">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Color</label>
                                <div class="col-sm-10">
                                    <select name="color" class="form-control" id="color">
                                        <option value="">Select Colour</option>			
                                        <option style="background:#FFD700;" value="#FFD700">Yellow</option>
                                        <option style="background:#0071c5;" value="#0071c5">Blue</option>
                                        <option style="background:#FF4500;" value="#FF4500">Orange</option>
                                        <option style="background:#A020F0;" value="#A020F0">Purple</option>
                                        <option style="background:#228B22;" value="#228B22">Green</option>
                                        <option style="background:#8B0000;" value="#8B0000">Red</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Date: </label>
                                <div class="col-sm-10">
                                    <input type="text" name="start" class="form-control" id="start" onkeypress="DataHora(event, this)">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Remind in </label>
                                <div class="col-sm-10">
                                    <input type="text" name="remind_date" class="form-control" id="remind_date" placeholder="(days)">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Content </label>
                                <div class="col-sm-10">
                                    <input type="text" name="content" class="form-control" id="content" placeholder="Message">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" name="CadEvent" id="CadEvent" value="CadEvent" class="btn btn-success">Add</button>                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
