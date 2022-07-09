<!doctype html>
<html lang="en" ng-app="myapp" ng-controller="blogcontroller">


<!-- Mirrored from demo.posthemes.com/pos_melani/en/xipblog/post/4_this-is-fourth-post-for-xipblog.html?page_type=post by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 02 Apr 2022 03:52:04 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
	@include('includes.head')
	
  </head>

<body id="module-xipblog-single" class="lang-en country-us currency-eur layout-full-width page-module-xipblog-single tax-display-disabled sub-page">

    <main>
        <!-- header           -->
	    @include('includes.header1')

        <aside id="notifications">
            <div class="container">



            </div>
        </aside>

        <div id="wrapper">
            <div class="container">
                <div class="breadcrumb-name">

                    <div class="breadcrumb_container">
                        <div class="container">
                            <nav data-depth="2" class="breadcrumb hidden-sm-down">
                                <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                        <a itemprop="item" href="../../index.html">
                                            <span itemprop="name">Home</span>
                                        </a>
                                        <meta itemprop="position" content="1">
                                    </li>
                                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                        <span itemprop="name">Single Blog</span>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <div class="inner-wrapper container">
                <div class="row">



                    <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12">


                        <div id="main" >


                            <section id="content" class="page-content card card-block" >


                                <div class="kr_blog_post_area single"  >
                                    <div class="kr_blog_post_inner">
                                        <article id="blog_post" class="blog_post blog_post_standrad">
                                            <div class="blog_post_content" >
                                                <div class="blog_post_content_top">
                                                    <div class="post_thumbnail">
                                                    <img src = "/images/@{{blog1.anh}}"
									                    style="width: 100%;height:550px;">
                                                    </div>
                                                </div>
                                                <div class="post_content">
                                                    <h3 class="post_title">@{{blog1.tieu_de}}</h3>
                                                    <!-- <div class="post_meta clearfix">
                                                        <p class="meta_author">
                                                            Posted by
                                                            <span>Demo Posthemes</span>
                                                        </p>
                                                        <p class="meta_date">
                                                            Oct 27TH, 2017
                                                        </p>
                                                        <p class="meta_category">
                                                            <a href="../category/1_fashione9f8.html?subpage_type=post&amp;page_type=category">Fashion</a>
                                                        </p>
                                                    </div> -->
                                                    <div class="post_description">
                                                        <p>
                                                        @{{blog1.noi_dung}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="comments_area" id="comments">
                                    <h2 class="comments_title">
                                        All comments
                                    </h2>
                                    <ol class="comment_list">
                                    </ol>
                                </div>
                                <div class="comment_respond clearfix m_bottom_50" id="respond">
                                    <h3 class="comment_reply_title" id="reply-title">
                                        Leave a Reply
                                        <small>
            <a href="http://demo.posthemes.com/wp_showcase/wp-supershot/?p=38#respond" id="cancel-comment-reply-link" rel="nofollow" style="display:none;">
                Cancel reply
            </a>
        </small>
                                    </h3>
                                    <form class="comment_form" action="#" method="post" id="xipblogs_commentfrom" role="form" data-toggle="validator">
                                        <div class="form-group xipblogs_message"></div>
                                        <div class="form-group xipblog_name_parent">
                                            <label for="xipblog_name">Your Name:</label>
                                            <input type="text" id="xipblog_name" name="xipblog_name" class="form-control xipblog_name" required>
                                        </div>
                                        <div class="form-group xipblog_email_parent">
                                            <label for="xipblog_email">Your Email:</label>
                                            <input type="email" id="xipblog_email" name="xipblog_email" class="form-control xipblog_email" required>
                                        </div>
                                        <div class="form-group xipblog_website_parent">
                                            <label for="xipblog_website">Website Url:</label>
                                            <input type="url" id="xipblog_website" name="xipblog_website" class="form-control xipblog_website">
                                        </div>
                                        <div class="form-group xipblog_subject_parent">
                                            <label for="xipblog_subject">Subject:</label>
                                            <input type="text" id="xipblog_subject" name="xipblog_subject" class="form-control xipblog_subject" required>
                                        </div>
                                        <div class="form-group xipblog_content_parent">
                                            <label for="xipblog_content">Comment:</label>
                                            <textarea rows="15" cols="" id="xipblog_content" name="xipblog_content" class="form-control xipblog_content" required></textarea>
                                        </div>
                                        <input type="hidden" class="xipblog_id_parent" id="xipblog_id_parent" name="xipblog_id_parent" value="0">
                                        <input type="hidden" class="xipblog_id_post" id="xipblog_id_post" name="xipblog_id_post" value="4">
                                        <input type="submit" class="btn btn-info pull-left xipblog_submit_btn" value="Submit Button">
                                    </form>
                                </div>

                                <script type="text/javascript">
                                    $('.xipblog_submit_btn').on("click", function(e) {
                                        e.preventDefault();
                                        var data = new Object();
                                        $('[id^="xipblog_"]').each(function() {
                                            id = $(this).prop("id").replace("xipblog_", "");
                                            data[id] = $(this).val();
                                        });

                                        function logErrprMessage(element, index, array) {
                                            $('.xipblogs_message').append('<span class="xipblogs_error">' + element + '</span>');
                                        }

                                        function xipremove() {
                                            $('.xipblogs_error').remove();
                                            $('.xipblogs_success').remove();
                                        }

                                        function logSuccessMessage(element, index, array) {
                                            $('.xipblogs_message').append('<span class="xipblogs_success">' + element + '</span>');
                                        }
                                        $.ajax({
                                            url: xip_base_dir + 'modules/xipblog/ajax.php',
                                            data: data,
                                            type: 'post',
                                            dataType: 'json',
                                            beforeSend: function() {
                                                xipremove();
                                                $(".xipblog_submit_btn").val("Please wait..");
                                                $(".xipblog_submit_btn").addClass("disabled");
                                            },
                                            complete: function() {
                                                $(".xipblog_submit_btn").val("Submit Button");
                                                $(".xipblog_submit_btn").removeClass("disabled");
                                            },
                                            success: function(data) {
                                                location.reload();
                                                xipremove();
                                                if (typeof data.success != 'undefined') {
                                                    data.success.forEach(logSuccessMessage);
                                                }
                                                if (typeof data.error != 'undefined') {
                                                    data.error.forEach(logErrprMessage);
                                                }
                                            },
                                            error: function(data) {
                                                xipremove();
                                                $('.xipblogs_message').append('<span class="error">Something Wrong ! Please Try Again. </span>');
                                            },
                                        });
                                    });
                                </script>

                            </section>



                            <footer class="page-footer">

                                <!-- Footer content -->

                            </footer>


                        </div>

                    </div>



                </div>
            </div>
        </div>
        <div class="blockPosition4">

        </div>
        <!-- Footer -->
        @include('includes.footer1')
            

    </main>




    <div class="back-top"><a href="#" class="back-top-button"><i class="fa-thin fa-angle-up"></i></a></div>
    <script src="/JS/angular.min.js"></script>
    <script src="/JS/blogcontroller.js"></script>
	<script src="/JS/dirPagination.js" type="text/javascript"></script>
</body>

<!-- Mirrored from demo.posthemes.com/pos_melani/en/xipblog/post/4_this-is-fourth-post-for-xipblog.html?page_type=post by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 02 Apr 2022 03:52:08 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

</html>