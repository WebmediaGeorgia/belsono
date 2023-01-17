<?php
/*
Template Name: Запись на прием
Template Post Type: page
*/
?>

<?php get_header() ?>


<main class="main">
    <div class="container all_pages_title">
        <div class="title_block">
            <h1 class="title_name">Онлайн запись</h1>
            <p class="title_border">
              <span class="line"></span>
              <span class="romb"></span>
              <span class="line"></span>
            </p>
          </div>
    </div>
    <div class="online_sign_content container">
      <div class="iframe">

      <?php get_template_part( 'fraim' ); ?>
      </div>
      <div class="members">
        <div class="top"><span> ВНИМАНИЕ! </span>Уважаемые пациенты, для обслуживания в медицинском центре необходимо иметь при себе паспорт.</div>
        <div class="bottom">
          <div class="content_member">
            <p class="titlememberk">
              Памятка по заполнению формы онлайн записи:
            </p>
            <p class="item">1. Ознакомиться с публичным договором, приложениями и правилами</p>
            <p class="item">2. Выберите филиал</p>
            <p class="item">3. Выберите специальность</p>
            <p class="item">4. Для правильного определения подходящего специалиста ознакомьтесь с описанием процедур, выполняемых каждым из них</p>
            <p class="item">5. Выберите желаемую дату и время записи из предложенных вариантов</p>
            <p class="item">7. Желательно в примечании указать требуемый вид обследования</p>
            <p class="item">8. При необходимости уточнения деталей записи с Вами свяжется наш специалист, в остальных случаях визит считается успешно сформированным (подтверждением является СМС-сообщение, которое придет Вам накануне приёма).</p>
            <p class="item">9. При отсутствии возможности посещения нашего центра в назначенную дату и время, просим своевременно уведомить нас об этом по номеру +375 29 193-88-80 любым удобным способом (звонок, смс, Viber).</p>
            <p class="item">10. Просим вас по возможности приходить за 10-15 минут до начала времени оказания услуги.</p>
            <p class="titlememberk">
              Благодарим за внимание. Будьте здоровы!
            </p>
          </div>
         
          <div class="btn_open titlememberk">Показать еще</div>
        
        </div>
      </div>
    </div>


  </main>

<?php get_footer()?>