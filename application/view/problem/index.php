<div class="container">
    <p>This is the Error-page. Will be shown when a page (= controller / method) does not exist.</p>
</div>









<div class="col-md-6 pb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <?php 


                        ?>
                        <form  method="post" action="mdlsugerencia.php"  novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control bg-transparent p-4" id="txtname" name="txtname" placeholder="Your Name"
                                    required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control bg-transparent p-4" id="txtemail" name="txtemail" placeholder="Your Email"
                                    required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control bg-transparent p-4" id="txtsubject" name="txtsubject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control bg-transparent py-3 px-4" rows="5" id="txtmessage" name="txtmessage" placeholder="Message"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit" id="btnEnviar" name="btnEnviar" value="ok" >Enviar mensaje</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>





















