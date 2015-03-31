

    <div class="breadcrumbs">

        <ul class="breadcrumb">
            <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://kovkanazakaz.com/index.html" itemprop="url" rel="home"><span itemprop="title">Главная</span></a>
            </li>
            <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://kovkanazakaz.com/contacts/index.html" title="Контактная информация" itemprop="url"><span itemprop="title">Контактная информация</span></a>
            </li>
            <li class="active">Написать нам письмо</li>
        </ul>
    </div>

    <div class="clearfix">
        <form class="form dropzone" id="sketch-form-validate" method="post" enctype="multipart/form-data">
            <div class="feedback-form-left">
                <div class="loader">
                    <p class="message"></p>
                </div>
                <input type="hidden" name="action" value="send">
                <div class="form-group">
                    <label class="control-label" for="name">Имя:</label>
                    <div>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Как вас зовут?" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label" for="comment">Вопросы, комментарии и пожелания:</label>
                    <div>
                        <textarea class="form-control" rows="4" id="comment" name="comment" placeholder="Артикул, пожелания, комментарии, адрес доставки, удобное время для звонка менеджера, любые дополнительные условия"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label" for="files">Вы можете прикрепить до 5 файлов:</label>
                    <div>
                    </div>
                    <div>
                        <div id="dropzone-clickable">
                            <p>Прикрепите файлы - перетащите в&nbsp;эту область или <a>выберите</a>.</p>
                            <p class="text-muted">Мы&nbsp;принимаем документы (Word, Excel), чертежи (.cdr, .dwg) и&nbsp;изображения (.jpg, .bmp и&nbsp;другие).</p>
                        </div>
                        <div id="dropzone-previews"></div>
                        <div class="fallback">
                            <input name="attachment[]" type="file" multiple="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label" for="phone">Телефон:</label>
                    <div>
                        <input type="text" class="phone form-control" id="phone" name="phone" placeholder="Ваш телефон для звонка менеджера" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label" for="email">Электронная почта:</label>
                    <div>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Ваш e-mail" value="">
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" checked="true" name="subscribe"> Я хочу получать информацию о&nbsp;скидках и&nbsp;акциях
                                <br><small>(не&nbsp;чаще 1&nbsp;раза в&nbsp;месяц)</small>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <span class=""><input type="submit" class="btn" name="sketchsubmit" value=" Отправить сообщение " disabled="true"></span> <span id="fieldsList">Осталось заполнить поля: <span></span></span>
                    </div>
                </div>
            </div>
            <div class="feedback-form-right">
                <p class="sales-info">Мы&nbsp;даём вам уникальную возможность сэкономить на&nbsp;заказе художественной ковки. Воспользуйтесь формой и&nbsp;пришлите нам коммерческое предложение конкурентов по&nbsp;вашему заказу, а&nbsp;мы&nbsp;предоставим вам скидку.</p>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/dropzone.js"></script>
    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        Dropzone.prototype.filesize = function (size) {
            var string;
            if (size >= 1024 * 1024 * 1024 * 1024 / 10) {
                size = size / (1024 * 1024 * 1024 * 1024 / 10);
                string = "Тб";
            } else if (size >= 1024 * 1024 * 1024 / 10) {
                size = size / (1024 * 1024 * 1024 / 10);
                string = "Гб";
            } else if (size >= 1024 * 1024 / 10) {
                size = size / (1024 * 1024 / 10);
                string = "Мб";
            } else if (size >= 1024 / 10) {
                size = size / (1024 / 10);
                string = "Кб";
            } else {
                size = size * 10;
                string = "б";
            }
            return "<strong>" + (Math.round(size) / 10) + "</strong> " + string;
        }

        var $dropzoneObject, listFields;

        $(function () {

            var $form = $("#sketch-form-validate");

            listFields = function () {
                var fields = $form.find('.form-group:not(.has-success) #name,.form-group:not(.has-success) #comment,.form-group:not(.has-success) #phone');

                if (fields.length > 0) {
                    $('#fieldsList').css('display', 'inline');
                } else {
                    $('#fieldsList').css('display', 'none');
                }

                $('#fieldsList span').empty();

                $(fields).each(function (index, element) {
                    switch ($(this).attr('name')) {
                    case 'name':
                        var title = 'Имя';
                        break;
                    case 'comment':
                        var title = 'Текст';
                        break;
                    case 'phone':
                        var title = 'Телефон';
                        break;
                    default:
                        var title = '';
                        break;
                    }

                    $('#fieldsList > span').append($("<a href='#" + fields[index].id + "' class='pseudo'>" + title + "</a>"));


                    if (index != ($(fields).length - 1)) {
                        $('#fieldsList > span').html($('#fieldsList > span').html() + ', ');
                    }
                });
            };

            $form.dropzone({
                // The configuration we've talked about above
                url: './',
                autoProcessQueue: false,
                method: 'post',
                uploadMultiple: true,
                parallelUploads: 5,
                maxFiles: 5,
                maxFilesize: 7,
                paramName: 'attachment',

                acceptedFiles: 'image/*,drawing/*,application/pdf,.cdr,.doc,.docx,.xsl,.xslx,.psd,.eps,.ai',

                addRemoveLinks: true,
                previewsContainer: '#dropzone-previews',
                clickable: "#dropzone-clickable",

                //translation
                dictCancelUpload: 'Отменить загрузку',
                dictRemoveFile: 'Убрать файл',

                // The setting up of the dropzone
                init: function () {
                    var $dropzone = this;

                    // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
                    // of the sending event because uploadMultiple is set to true.
                    this.on("sendingmultiple", function () {
                        // Gets triggered when the form is actually being sent.
                        // Hide the success button or the complete form.
                        $form.find('.loader').show();
                    });

                    this.on("successmultiple", function (files, response) {
                        // Gets triggered when the files have successfully been sent.
                        // Redirect user or notify of success.

                        //register metrics
                        try {
                            //catch form contacts
                        } catch (e) {
                            //
                        }

                        $form.find('.loader').addClass('ok');
                        $form.find('.loader p.message').html('Отлично! Мы получили вашу заявку и&nbsp;перезвоним в&nbsp;течение 15&nbsp;минут!');
                    });

                    this.on("errormultiple", function (files, response) {
                        // Gets triggered when there was an error sending the files.
                        // Maybe show form again, and notify user of error
                        $form.find('.loader').hide();
                    });

                    this.on("maxfilesexceeded", function (file) {
                        this.removeFile(file);
                    });

                    $dropzoneObject = this;
                }
            });

            $.validator.setDefaults({
                errorElement: "span",
                errorClass: "help-block",
                errorPlacement: function (error, element) {
                    if (element.parent('.form-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                        error.insertAfter(element.parent());
                    } else {
                        error.insertAfter(element);
                    }
                }
            });

            $.validator.addMethod(
                'regexp',
                function (value, element, regexp) {
                    var re = new RegExp(regexp);
                    return this.optional(element) || re.test(value);
                },
                "Please check your input."
            );

            $form.find('input[name=phone]').eq(0).mask('\+7 (999) 999-99-99', {
                clearEmpty: false
            });

            $form.validate({
                focusInvalid: true,
                rules: {
                    name: {
                        required: true,
                        minlength: 3
                    },
                    email: {
                        required: false,
                        email: true
                    },
                    phone: {
                        required: true,
                        regexp: '^\\+[7]{1} \\([0-9]{3}\\) [0-9]{3}\\-[0-9]{2}\\-[0-9]{2}$'
                    },
                    comment: {
                        required: true,
                        minlength: 5
                    }
                },
                messages: {
                    name: {
                        required: "Пожалуйста, введите свое имя",
                        minlength: "Пожалуйста, введите имя полностью"
                    },
                    email: {
                        email: "Пожалуйста, корректно введите свой адрес электронной почты"
                    },
                    phone: {
                        required: "Введите телефон в формате +7 (XXX) XXX-XX-XX",
                        regexp: "Введите телефон в формате +7 (XXX) XXX-XX-XX"
                    },
                    comment: {
                        required: "Пожалуйста, введите текст письма",
                        minlength: "Пожалуйста, введите текст письма"
                    }
                },
                onfocusout: function (element) {
                    $(element).valid();
                    listFields();
                },
                onkeyup: function (element) {
                    $(element).valid();
                    listFields();
                },
                success: function (element) {
                    $(element)
                        .closest('.form-group').removeClass('has-error').addClass('has-success');
                    listFields();
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-error');
                },
                submitHandler: function (form) {
                    //event.preventDefault;
                    //event.stopPropagation;
                    // Make sure that the form isn't actually being sent.
                    if ($dropzoneObject.getQueuedFiles().length > 0) {
                        $dropzoneObject.processQueue();
                    } else {
                        //$dropzoneObject.uploadFiles([]);
                        //fixing bug in library
                        var $form = $(form);
                        var $inputs = $form.find("input, select, button, textarea, checkbox");
                        var serializedData = $form.serialize();

                        $form.find('.loader').show();

                        $inputs.prop("disabled", true);

                        var request = $.ajax({
                            url: $(form).attr('action'),
                            type: "post",
                            cache: false,
                            data: serializedData
                        });

                        request.done(function (response, textStatus, jqXHR) {
                            $(form).find('.loader').addClass('ok');
                            $(form).find('.loader p.message').html('Отлично! Мы получили вашу заявку и&nbsp;перезвоним в&nbsp;течение 15&nbsp;минут!');
                        });

                        request.fail(function (jqXHR, textStatus, errorThrown) {
                            $(form).children('.loader').hide();
                        });

                        request.always(function () {
                            $inputs.prop("disabled", false);
                        });
                    }
                }
            });

            $form.on('change keyup focusout', function () {
                if ($(this).validate().checkForm()) {
                    $form.find('input[type=submit]').eq(0).parent().addClass('button-container-inline');
                    $form.find('input[type=submit]').eq(0).removeClass('btn-disabled').attr('disabled', false);
                } else {
                    $form.find('input[type=submit]').eq(0).parent().removeClass('button-container-inline');
                    $form.find('input[type=submit]').eq(0).addClass('btn-disabled').attr('disabled', true);
                }
            });

            listFields();

        });
    </script>