<div class="footer-top">
    <div class="container">
        <div class="row">
            <aside id="footer-top">
                <script>
                    function subscribe() {
                        var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                        var email = $('#txtemail').val();
                        if (email != "") {
                            if (!emailpattern.test(email)) {
                                $('.text-danger').remove();
                                var str = '<span class="error">Invalid Email</span>';
                                $('#txtemail').after('<div class="text-danger">Invalid Email</div>');

                                return false;
                            } else {
                                $.ajax({
                                    url: 'index.php?route=extension/module/newsletters/news',
                                    type: 'post',
                                    data: 'email=' + $('#txtemail').val(),
                                    dataType: 'json',


                                    success: function (json) {

                                        $('.text-danger').remove();
                                        $('#txtemail').after('<div class="text-danger">' + json.message + '</div>');

                                    }

                                });
                                return false;
                            }
                        } else {
                            $('.text-danger').remove();
                            $('#txtemail').after('<div class="text-danger">Email Is Require</div>');
                            $(email).focus();

                            return false;
                        }


                    }
                </script>

                <div class="newsletter">
                    <div class="news-left">
                        <div class="news-title">Sign up for newsletter</div>
                    </div>
                    <div class="news-right">
                        <div class="news-des">Get 30% discount on your next purchase.</div>
                        <form method="post">
                            <div class="form-group required">
                                <label class="col-sm-2 control-label">Enter Your Email</label>
                                <div class="input-news">
                                    <input type="email" name="txtemail" id="txtemail" value=""
                                           placeholder="Enter Your Email" class="form-control input-lg"/>
                                    <button type="submit" class="btn btn-default btn-lg"
                                            onclick="return subscribe();">Subscribe
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </aside>

        </div>
    </div>
</div>
