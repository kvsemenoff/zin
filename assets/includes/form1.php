<div id="form_1">
  <div class="content2">
    <div class="form">
      <h1 class="large"><b>Акция!</b></h1>
      <h2 class="subtitle">Пакет "Авторский" по цене "Оптимум" <br />при заказе до 1 мая<br /></h2><b>Только 2 пары, спешите!</b>
      <div class="action">
        <p class="end">До конца акции осталось:</p>
        <div id="myCountdown">
          <script>
            var dt = new Date(); // создание новой даты по исходным даанным
            var ny = new Date(2017, 22, 1);
            var elapsed = ny.getTime()- dt.getTime();
                elapsed=Math.floor( elapsed/ (86400000));
                elapsed= elapsed % 14;
            var month = dt.getMonth();
            var day = dt.getDate() + elapsed;
            if (day>28) {
              month+=1;
              day=1;
            }
            var year = dt.getFullYear()
            $('#myCountdown').countdown({until: new Date(2017, 04, 1, 21), padZeroes: true,  format: 'DHMS'});
          </script>
        </div>
      </div>
      <div class="general_form">
        <div class="form_content">
          <div id="fields2">
            <p class="text_form"><br />Оставьте заявку<br /></p>
            <div class="content_form">
              <form id="ajax-contact-form2" action="">
                <input class="form-control" name="referer" type="hidden" value="<?=$referer?>">
                <input class="form-control" name="referer2" type="hidden" value="<?=$referer2?>">
                <input class="form-control" name="phrase" type="hidden" value="<?=$phrase?>">
                <input class="form-control" name="phone" type="text" placeholder="Введите телефон" id="inp2" data-toogle="popover" data-content="Поле не заполнено!" data-placement="top" />
                <input class="button_1" style="display: inline-block; margin: 0 0 0 15px;" required type="submit" value="Забронировать дату" onClick="proverka(2)" id="win2" data-toogle="popover" data-content=" Cпасибо, что оставили заявку, наши специалисты свяжутся с Вами в ближайшее время!" data-placement="top" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
