<div id="header">
  <nav class="navbar navbar-default navbar-fixed-top hidden-md hidden-lg" role="navigation">
      <!-- Название компании и кнопка, которая отображается для мобильных устройств группируются для лучшего отображения при свертывании -->
      <div class="navbar-header">
        <a style="color: #C5A70A; display:inline-block; margin: 15px 20px 0 30px" href="tel:89264539579">8 (926) 453-95-79</a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Группируем ссылки, формы, выпадающее меню и прочие элементы -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#balls1">Свадебное видео</a></li>
          <li><a href="#form_1" data-toggle="collapse" data-target=".navbar-collapse">Акция</a></li>
          <li><a href="#video_2" data-toggle="collapse" data-target=".navbar-collapse">Портфолио</a></li>
          <li><a href="#mobile-prices" data-toggle="collapse" data-target=".navbar-collapse">Цены</a></li>
          <li><a href="#reviews" data-toggle="collapse" data-target=".navbar-collapse">Отзывы</a></li>
          <li><a href="#footer" data-toggle="collapse" data-target=".navbar-collapse">Контакты</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
  </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo"></div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 col-md-offset-6">
                    <div class="phone_box">
                        <p class="phone"><a href="tel:89264539579">8 (926) 453-95-79</a></p>
                        <p class="text"><b>Zinoveev@yandex.ru</b></p>
                        <a data-toggle="modal" href="#myModal0"><small>Закажите обратный звонок</small></a>
                        <h1 class="title hiddenmd hidden-lg"><span class="text" >Свадебное видео</span>видеоролик на следующий<br />день после свадьбы! <br /></h1>
                    </div>
                </div>
                <div class="hidden-xs hidden-sm col-md-12">
                    <h1 class="title"><span class="text" >Свадебное видео</span>видеоролик на следующий<br />день после свадьбы! <br /></h1>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-7">
                    <div class="video">
                        <div class="bg_video"><!--Тут отслеживается таргет-->
                            <!-- <iframe onclick="yaCounter24321856.reachGoal('PROSMOTRVIDEO'); return true;"
                            style="margin: 18px 0 0 18px;" src="//player.vimeo.com/video/204238910?title=0&amp;byline=0&amp;portrait=0" width="520" height="320" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
                            <iframe onclick="yaCounter24321856.reachGoal('PROSMOTRVIDEO'); return true;"
                            src="//player.vimeo.com/video/204238910?title=0&amp;byline=0&amp;portrait=0" class="bg_video__element" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="general_form">
                        <div class="form_content">
                            <div id="fields1">
                                <p class="title_form">Позвоните<br />прямо сейчас<br/></p>
                                <p class="text_form"><b>и получите<br />видеоролик на <br /> СЛЕДУЮЩИЙ ДЕНЬ <br />после свадьбы </b></p>
                                <div class="content_form">
                                    <form id="ajax-contact-form1" action="#">
                                            <input class="form-control" name="referer" type="hidden" value="<?=$referer?>">
                                            <input class="form-control" name="referer2" type="hidden" value="<?=$referer2?>">
                                            <input class="form-control" name="phrase" type="hidden" value="<?=$phrase?>">
                                        <input class="form-control" name="phone" type="text" placeholder="Введите телефон" id="inp1" data-toogle="popover" data-content="Поле не заполнено!" data-placement="left" />
                                        <input class="button_1" type="submit" value="Забронировать дату" onClick="proverka(1)" id="win1" data-toogle="popover" data-content=" Cпасибо, что оставили заявку, наши специалисты свяжутся с Вами в ближайшее время!" data-placement="top" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="balls1">


                        <div class="col-md-4 col-xs-4 balls-1-item">
                            <p><span class="title">более<span class="number" > 7</span> лет</span>Помогаем сохранить<br />Ваши воспоминания</p>
                        </div>
                        <div class="col-md-4 col-xs-4 balls-1-item">
                            <p><span class="title"><span class="number" >516</span></span>Счастливых<br /> пар</p>
                        </div>
                        <div class="col-md-4 col-xs-4 balls-1-item">
                            <p><span class="title">от<span class="number"> 30</span> тысяч</span>стоимость наших <br />услуг</p>
                        </div>

                </div>
            </div>
        </div>
    </div>
