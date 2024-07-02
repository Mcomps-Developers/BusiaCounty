<main>
    @section('title')
        Contact Us
    @endsection
    <header class="text-white pageMainHead d-flex position-relative bgCover w-100"
        style="background-image: url(https://placehold.co/1920x300);">
        <div class="alignHolder d-flex w-100 align-items-center">
            <div class="align w-100 position-relative">
                <div class="container">
                    <h1 class="mb-2 text-white">Contact us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 border-0 breadcrumb breadcrWhite rounded-0 fontAlter">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="cctBlock py-7 py-md-9 py-xl-16">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <header class="mb-6 text-center">
                            <h2 class="mb-2 fwSemiBold text-capitalize">Leave your Message</h2>
                            <p>Contact us today using this form and we will reach you asap.</p>
                        </header>
                        <form action="#" class="commentForm">
                            <div class="row mx-n2">
                                <div class="px-2 col-12 col-sm-6 col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control d-block w-100" placeholder="Name">
                                    </div>
                                </div>
                                <div class="px-2 col-12 col-sm-6 col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control d-block w-100" placeholder="Email">
                                    </div>
                                </div>
                                <div class="px-2 col-12 col-sm-6 col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <input type="tel" class="form-control d-block w-100"
                                            placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="px-2 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control d-block w-100" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="px-2 col-12">
                                    <div class="form-group" wire:ignore>
                                        <textarea id="message" wire:model.live='message'
                                            placeholder="Write your message&hellip;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="p-0 mt-2 border-0 btn btnTheme d-flex font-weight-bold text-capitalize position-relative btnWidthSmall w-100"
                                data-hover="Send Message">
                                <span class="d-block btnText">Send Message</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@script
    <script>
        $(function() {
            tinymce.init({
                selector: '#message',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                setup: function(editor) {
                    editor.on('Change', function(e) {
                        tinymce.triggerSave();
                        var sd_data = $('#message').val();
                        @this.set('message', sd_data);
                    });
                }
            });
        });
    </script>
@endscript
