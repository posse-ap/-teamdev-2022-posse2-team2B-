<?php

function a_html_head($title)
{
?>
  <!DOCTYPE html>
  <html lang="ja">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/user.min.css">
    <script src="https://kit.fontawesome.com/a60c81f350.js" crossorigin="anonymous"></script>
  </head>

  <body>
  <?php
}

function a_html_foot()
{
  ?>
  </body>

  </html>
<?php
}

// ヘッダー開始部分
function a_header_start()
{
?>
  <header class="header">
    <div class="header-inner">
    <?php
  }

  // ハンバーガーボタン
  function a_hamburger()
  {
    ?>

      <button class="header__hamburger hamburger" id="js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <!-- <div class="phone-icon">
        <i class="fa-solid fa-bars"></i>
      </div> -->
    <?php
  }

  // ヘッダー ページタイトル
  function a_header_title()
  {
    ?>
      <div class="page-title">
        <a href="">
          <h2>就活.com</h2>
        </a>
      </div>
    <?php
  }

  // ヘッダー検索アイコン
  function a_header_search_icon()
  {
    ?>
      <div class="phone-icon">
        <i class="fa-solid fa-magnifying-glass"></i>
      </div>

    </div><!-- header-innerの閉じタグ -->
  <?php
  }

  // ヘッダー上部
  function m_header_upper()
  {
    a_header_start();
    a_hamburger();
    a_header_title();
    a_header_search_icon();
  }

  // ヘッダー ナビゲーション
  function a_header_nav()
  {
  ?>
      <nav class="header__nav nav" id="js-nav">
        <ul class="nav__items nav-items">
          <li class="nav-items__item"><a href="">就活サイト</a></li>
          <li class="nav-items__item"><a href="">就活支援サービス</a></li>
          <li class="nav-items__item"><a href="">自己分析診断ツール</a></li>
          <li class="nav-items__item"><a href="">ES添削サービス</a></li>
          <li class="nav-items__item"><a href="">就活.comとは</a></li>
          <li class="nav-items__item"><a href="">就活エージェント比較</a></li>
          <li class="nav-items__item"><a href="">お問い合わせ</a></li>
        </ul>
      </nav>

<!--       
    <nav class="header-nav">
      <ul class="header-nav-list">
        <li>
          <a href="">就活サイト</a>
        </li>
        <li>
          <a href="">就活支援サービス</a>
        </li>
        <li>
          <a href="">自己分析診断ツール</a>
        </li>
        <li>
          <a href="">ES添削サービス</a>
        </li>
        <li>
          <a href="">就活.comとは</a>
        </li>
        <li>
          <a href="">就活エージェント比較</a>
        </li>
        <li>
          <a href="">お問い合わせ</a>
        </li>
      </ul>
    </nav> -->
  <?php
  }

  function a_header_end()
  {
  ?>
  </header>
<?php
  }

  // ヘッダー全体
  function o_header()
  {
    m_header_upper();
    a_header_nav();
    a_header_end();
  }

  // セクション開始部分 a_section_end()とセットで使う
  function a_section_start($section_title, $disable_title)
  {
?>
  <section class="Section">
    <?php if (isset($section_title) && !$disable_title) {
    ?>
      <div class="Section__title">
        <p>
          <?= $section_title; ?>
        </p>
      </div>
    <?php
    }
    ?>
    <div class="Section__content">
    <?php
  }

  // セクション終了部分
  function a_section_end()
  {
    ?>
    </div>
  </section>
<?php
  }

  // セクション内小見出し
  function a_heading_in_section($title)
  {
?>
  <div class="Section__inner-heading">
    <p class=""><?= $title; ?></p>
  </div>
<?php
  }

  // セクション内小見出し(問い合わせフォーム用)
  function a_heading($title)
  {
?>
  <div class="Small-heading__heading">
    <p class=""><?= $title; ?></p>
  </div>
<?php
  }

  // 「必須」マーク
  function a_required_mark()
  {
?>
  <div class="Small-heading__essential-mark">
    <p>必須</p>
  </div>
<?php
  }

  // セクション内小見出し、「必須」マーク付き
  function m_heading_required($title)
  {
?>
  <div class="Small-heading__heading-essential">
    <?php
    a_heading($title);
    a_required_mark();
    ?>
  </div>
<?php
  }

  // 使い方カード $file = /pictures/howto/step1.png のようにする
  function a_howto_card($file)
  {
?>
  <div class="How-to__card">
    <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] . $file ?>">
  </div>
<?php
  }

  // 使い方エリア
  function o_howto()
  {
    a_section_start('問い合わせまでの流れ', false);
?>
  <div class="How-to">
    <div class="How-to__cards__four">
      <div class="How-to__cards__two">
        <?php
        a_howto_card('/pictures/howto/step1.png');
        a_howto_card('/pictures/howto/step2.png');
        ?>
      </div>
      <div class="How-to__cards__two">

        <?php
        a_howto_card('/pictures/howto/step3.png');
        a_howto_card('/pictures/howto/step4.png');
        ?>

      </div>
    </div>
  </div>
<?php
    a_section_end();
  }

  // 検索条件タグ
  function a_tag($tag)
  {
?>
  <div class="Search__tag__wrapper">
    <div class="Search__tag">
      <label class="Search__tag__label" id="searchTagLabel<?= $tag['id']; ?>" for="searchTag<?= $tag['id']; ?>"><?= $tag['tag_name']; ?></label>
      <input type="checkbox" name="tags[]" value="<?= $tag['id']; ?>" class=" Search__tag__input" id="searchTag<?= $tag['id']; ?>" onclick="tagClick(<?= $tag['id']; ?>)">
    </div>
  </div>
<?php
  }

  // 検索条件小見出し（タグカテゴリ）とタグのかたまり
  function m_tags_sec($tag_category, $tags)
  {
    a_heading_in_section($tag_category['tag_category_name']);
    foreach ($tags as $tag) {
      a_tag($tag);
    }
  }

  // 検索ボタン
  function a_search_btn()
  {
?>
  <div class="Search__btn">
    <button name="search">
      <i class="fa-solid fa-magnifying-glass"></i><span>検索</span>
    </button>
  </div>
<?php
  }

  // 検索エリア全体
  function o_search_area($tag_categories)
  {
?>
  <form action="./result.php" method="POST">
    <?php
    a_section_start('条件絞り込み', false);

    ?>
    <div>
      <p>※すべて複数選択可能</p>
    </div>
    <?php
    global $db;
    foreach ($tag_categories as $tag_category) {
      $tags_stmt = $db->prepare("SELECT * FROM tags WHERE tag_category_id = ?");
      $tags_stmt->execute([$tag_category['id']]);
      $tags = $tags_stmt->fetchAll();
      m_tags_sec($tag_category, $tags);
    }

    a_search_btn();

    a_section_end();
    ?>
  </form>
<?php
  }

  // エージェントカード
  function a_agent_name($agent_name)
  {
?>
  <div class="agent-card-agent-name">
    <h3><?= $agent_name; ?></h3>
  </div>
<?php
  }

  // エージェントカード エージェント画像 $file = '/pictures/agent1.jpg' のようにする
  function a_agent_img($file)
  {
?>
  <div class="agent-card-image">
    <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] . $file ?>">
  </div>
<?php
  }

  // エージェントカード　タグ
  function a_agent_tag($tag_name)
  {
?>
  <div class="agent-card-tag">
    <?= $tag_name; ?>
  </div>
<?php
  }

  // エージェントカード　タグエリア $tagsはDBから取得した連想配列
  function m_agent_tags($tags)
  {
?>
  <div class="agent-card-tags-area">
    <?php
    foreach ($tags as $tag) {
      a_agent_tag($tag['tag_name']);
    }
    ?>
  </div>
<?php
  }

  // エージェントカード　評価　テーブル列
  function a_agent_eval_tr($eval)
  {
?>
  <tr>
    <td>
      <p><?= $eval['title']; ?></p>
    </td>
    <td class="star-evaluation">
      <p><?= str_repeat('★', $eval['star']); ?></p>
    </td>
  </tr>
<?php
  }

  // エージェントカード　評価　テーブル
  function m_agent_eval($evals)
  {
?>
  <div class="agent-card-star-evaluation-table">
    <table>
      <?php
      foreach ($evals as $eval)
        a_agent_eval_tr($eval);
      ?>
    </table>
  </div>
<?php
  }

  // エージェントカード 紹介文
  function a_agent_intro($agent_intro)
  {
?>
  <div class="argent-card-info-text">
    <p><?= $agent_intro; ?></p>
  </div>
<?php
  }

  // エージェントカード BOX追加ボタン
  function a_agent_putbox_btn($agent_id)
  {
    $agent = f_select_agent($agent_id);
    $agent_name = $agent['agent_name'];
?>

  <div id="put_into_box" class="put-into-inquiry-box argent-card-btn js-put-btn js-put-btn<?= $agent_id; ?>" onclick="putBox(<?= $agent_id; ?>, '<?= $agent_name; ?>')">
    <p>問い合わせBOXに入れる</p>
  </div>
<?php
  }

  function a_agent_deletebox_btn($agent_id)
  {
?>
  <div id="put_out_of_box" class="put-out-of-inquiry-box argent-card-btn js-delete-btn js-delete-btn<?= $agent_id; ?>" onclick="deleteBox(<?= $agent_id; ?>)">
    <p>問い合わせBOXから出す</p>
  </div>
<?php
  }

  function a_agent_detail_btn($agent_id)
  {
?>
  <a href="./detail.php?id=<?= $agent_id; ?>" class="view-more-info argent-card-btn">
    <!-- <div class="view-more-info"> -->
    <p>詳しく見る ></p>
    <!-- </div> -->
  </a>
<?php
  }

  function m_agent_btns($agent_id)
  {
?>
  <div class="argent-card-btns">
    <?php
    a_agent_putbox_btn($agent_id);
    a_agent_deletebox_btn($agent_id);
    a_agent_detail_btn($agent_id);
    ?>
  </div>
<?php
  }

  // エージェントカード全体
  function o_agent_card($agent_id, $agent_name, $agent_intro, $tags, $evals)
  {
?>
  <article class="agent-card">
    <div class="Agent-card__top">
      <div class="Agent-card__top__sp">
        <?php
        a_agent_name($agent_name);
        ?>
      </div>
      <div class="Agent-card__top__left">
        <?php
        a_agent_img('/pictures/agent1.jpg');
        ?>
      </div>
      <div class="Agent-card__top__right">
        <div class="Agent-card__top__right-pc">
          <?php
          a_agent_name($agent_name);
          ?>
        </div>
        <?php
        m_agent_tags($tags);
        ?>
      </div>
    </div>
    <?php
    // a_agent_img('/pictures/agent1.jpg');
    // m_agent_tags($tags);
    m_agent_eval($evals);
    a_agent_intro($agent_intro);
    m_agent_btns($agent_id);
    ?>
  </article>
<?php
  }

  // エージェントリスト
  function o_agent_list($agents, $disable_title)
  {
    a_section_start('掲載エージェント一覧', $disable_title);

    global $db;
    foreach ($agents as $agent) {
      $tags_stmt = $db->prepare("SELECT * FROM agent_tags LEFT JOIN tags ON agent_tags.tag_id = tags.id WHERE agent_tags.agent_id = ?");
      $tags_stmt->execute([$agent['id']]);
      $tags = $tags_stmt->fetchAll();

      $evals = f_set_evals($agent['id']);
      o_agent_card($agent['id'], $agent['agent_name'], $agent['paragraph1'], $tags, $evals);
    }

    a_section_end();
  }

  // 再検索 開始
  function a_re_search_start()
  {
?>
  <section class="Re-search">
    <div class="Re-search__ac__parent">
      <p class="">
        再検索
      </p>

    </div>
    <div class="Re-search__ac__child">
    <?php
  }

  // 再検索 中身
  function m_re_search_inner()
  {
    ?>
      <div class="Re-search-tags__ac">
        <div class="Re-search-tags__ac__parent">
          <p class="">XXXから選ぶ</p>
        </div>

        <div class="Re-search-tags__ac__child">
          <div>ここにタグが入る</div>
        </div>
      </div>
    <?php
  }

  // 再検索　終了
  function a_re_search_end()
  {
    ?>
    </div>
  </section>
<?php
  }

  // 再検索　全体
  function o_re_search()
  {
    a_re_search_start();
    m_re_search_inner();
    a_re_search_end();
  }

  // 検索結果 件数
  function a_result_amount()
  {
?>
  <div class="Search-result__message__number">
    <p><span class="Search-result__message__figure">2</span><span class="Search-result__message__unit">件表示</span></p>
  </div>
<?php
  }

  function a_result_tags()
  {
?>
  <div class="Search-result__message__tags">
    <div class="Search-result__message__tag">
      タグ文字変数
    </div>
    <div class="Search-result__message__tag">
      タグ文字変数
    </div>
  </div>
<?php
  }

  function a_result_putall()
  {
?>
  <div class="Search-result__message__check-all">
    <label for="allAgents" class="Search-result__check-all__wrapper">
      <input type="checkbox" id="allAgents" class="Search-result__check-all__checkbox" name="checkbox01">
      <span class="Search-result__check-all__checkbox-icon"></span>
      すべて問い合わせBOXに入れる
    </label>
  </div>
<?
  }

  // 検索結果　先頭
  function m_result_head()
  {
?>
  <div class="Search-result__message">
    <?php
    a_result_amount();
    a_result_tags();
    a_result_putall();
    ?>
  </div>
<?php
  }

  function o_result($agents)
  {
    a_section_start('検索結果', false);
    m_result_head();
    o_agent_list($agents, true);
    a_section_end();
  }

  // 閲覧履歴
  function m_agent_small($agent)
  {
?>
  <article class="Agent-card__wrapper__mini">
    <?php
    a_agent_img('/pictures/agent1.jpg');
    a_agent_name($agent['agent_name']);
    ?>
  </article>
<?php
  }

  function o_history($agents)
  {
    a_section_start('閲覧履歴', false);
    foreach ($agents as $agent) {
      m_agent_small($agent);
    }
    a_section_end();
  }

  // エージェント詳細　最終更新
  function a_agent_detail_updated($last_updated)
  {
?>
  <div class="Agent-page__last-update">
    <p>最終更新日:<?= $last_updated; ?></p>
  </div>
<?php
  }

  // エージェント詳細 説明文
  function a_agent_detail_text($text)
  {
?>
  <div class="Agent-page__text">
    <p>
      <?= $text; ?>
    </p>
  </div>
<?php
  }

  // エージェント詳細　説明パラグラフ（見出し＋説明文）
  function m_agent_detail_para($title, $text)
  {
    a_heading_in_section($title);
    a_agent_detail_text($text);
  }

  // エージェント詳細　全体
  function o_agent_detail($agent_id, $agent_name, $updated_at, $agent_picture, $evals, $paragraphs)
  {
    // セクションの開始
    a_section_start($agent_name, false);
    // 最終更新日
    a_agent_detail_updated($updated_at);
?>
  <div class="Agent-page__image">
    <?php
    // エージェントの画像
    a_agent_img($agent_picture);

    // 画像切り替えボタンみたいなやつ
    ?>
  </div>
  <?php
    // ★評価表
    m_agent_eval($evals);
  ?>
  <div class="Agent-page__inquiry-btn">
    <?php
    // 問い合わせボックスに追加ボタン
    a_agent_putbox_btn($agent_id);

    // 問い合わせボックスから出すボタン
    a_agent_deletebox_btn($agent_id);
    ?>
  </div>

  <?php
    // 小見出しと紹介文
    foreach ($paragraphs as $paragraph) {
      $title = $paragraph['title'];
      $text = $paragraph['text'];
      m_agent_detail_para($title, $text);
    }
  ?>

  <div class="Agent-page__inquiry-btn">
    <?php
    // 問い合わせボックスに追加ボタン
    a_agent_putbox_btn($agent_id);

    // 問い合わせボックスから出すボタン
    a_agent_deletebox_btn($agent_id);
    ?>
  </div>


  <?php
    // セクションの終わり
    a_section_end();
  ?>

<?php
  }

  function a_box_deletebtn($agent_id)
  {
?>
  <div class="Application__box__trash">
    <i class="fa-solid fa-trash-can" onclick="deleteBox(<?= $agent_id; ?>)"></i>
  </div>
<?php
  }

  function m_box_item($agent)
  {
    a_box_deletebtn($agent['id']);
    m_agent_small($agent);
  }

  function o_box()
  {
    a_section_start('問い合わせBOX', false);
?>
  <ul class="js-box"></ul>
<?php
    a_section_end();
  }

  function a_form_backbtn($text)
  {
?>
  <a href="#" onclick="javascript:window.history.back(-1);return false;">
    <div class="Application-form__back-button">
      <i class="fa-solid fa-angle-left"></i>
      <p><?= $text; ?></p>
    </div>
  </a>
<?php
  }

  function a_form_send($title, $onclick)
  {
?>
  <div class="Application-form__submit-btn__wrapper">
    <div class="Application-form__submit-btn" onclick="<?= $onclick; ?>">
      <div><?= $title; ?></div>
    </div>
  </div>
<?php
  }

  function a_form_radio_btn($index, $title)
  {
?>
  <div class="Application-form__radio">
    <input id="app_radio_<?= $index; ?>" name="inq_radio" type="radio" value="<?= $index; ?>">
    <label for="app_radio_<?= $index; ?>" class="Application-form__radio__label"><?= $title; ?></label>
  </div>
<?php
  }

  function m_form_radio()
  {
    a_form_radio_btn(1, '1');
    a_form_radio_btn(2, '2');
    a_form_radio_btn(3, '3');
  }

  // $attributes = [attribute => value, attribute => value, ...]
  // $options = [[attributes => [attribute => value, ...], text => 'text'], ...]
  function a_select($attributes, $options)
  {
    $att = f_attributes_str($attributes);
?>
  <select <?= $att; ?>>
    <?php
    foreach ($options as $option) :
      $option_att = f_attributes_str($option['attributes']);
    ?>
      <option <?= $option_att; ?>><?= $option['text']; ?></option>
    <?php
    endforeach;
    ?>
  </select>
<?php
  }

  function a_select_gradu_year()
  {
?>
  <select name="inq_graduation" id="inqGraduation" class="Application-form__input__glay-border">
    <option value="" hidden>選択してください</option>
    <option value="2022">22卒</option>
    <option value="2023">23卒</option>
    <option value="2024">24卒</option>
    <option value="2025">25卒</option>
    <option value="other">その他</option>
  </select>
<?php
  }

  function a_label($title, $for)
  {
?>
  <label for="<?= $for; ?>"><?= $title; ?></label>
  <br>
<?php
  }

  function a_free_textbox()
  {
?>
  <textarea name="inq_free" id="inqFree" cols="30" rows="10" class="Application-form__input__glay-border" placeholder="例）面談までの流れを詳しく教えてください。"></textarea>
<?php
  }

  function a_form_agree()
  {
?>
  <div class="Application-form__input__glay-border Application-form__privacy-cb">
    <label for="inqAgree" class="Application-form__privacy-cb__wrapper">
      同意する
      <input type="checkbox" name="inq_agree" value="同意する" id="inqAgree" class="Application-form__privacy-cb__checkbox">
      <span class="Application-form__privacy-cb__checkbox-icon"></span>
    </label>

  </div>

  <div class="Application-form__privacy-message">
    <p>規約に同意の上チェックしてください</p>
  </div>
<?php
  }

  function a_form_policy()
  {
?>
  <div class="Application-form__input__glay-border Application-form__privacy-policy">
    <p>
      これがプライバシーポリシーの文章です。このサイトでは第一項
      これがプライバシーポリシーの文章です。このサイトでは第一項
      これがプライバシーポリシーの文章です。このサイトでは第一項
      これがプライバシーポリシーの文章です。このサイトでは第一項
      これがプライバシーポリシーの文章です。このサイトでは第一項
      これがプライバシーポリシーの文章です。このサイトでは第一項
      これがプライバシーポリシーの文章です。このサイトでは第一項
      項
    </p>
  </div>
<?php
  }

  // 問い合わせフォーム $inq_agents = 'agent_id,agent_id,...' (カンマ区切り文字列)
  function o_form($inq_agents)
  {
    a_section_start('問い合わせフォーム', false);

    // 戻るボタン
    a_form_backbtn('戻る');
?>
  <form class="Application-form h-adr" method="POST" action="check.php" id="inqForm">
    <?php
    // 問い合わせ先エージェント
    a_heading('問い合わせ先エージェント');

    $inq_agents_array = explode(',', $inq_agents);
    foreach ($inq_agents_array as $agent_id) {
      $agent = f_select_agent($agent_id);
    ?>
      <p><?= $agent['agent_name']; ?></p>
    <?php
    }
    f_input(['type' => 'hidden', 'name' => 'inq_agents', 'value' => $inq_agents]);

    // お問い合わせ内容 ラジオボタン
    m_heading_required('お問い合せ内容');
    m_form_radio();

    // 名前
    m_heading_required('名前');
    f_input(['class' => 'Application-form__name Application-form__input__glay-border js-zen-input', 'placeholder' => '例）就活太郎', 'name' => 'inq_name', 'id' => 'inqName']);

    // 名前（フリガナ）
    m_heading_required('名前(フリガナ)');
    f_input(['class' => 'Application-form__name Application-form__input__glay-border js-zen-input', 'placeholder' => '例）シュウカツタロウ', 'name' => 'inq_nameruby', 'id' => 'inqNameruby']);

    // 生年月日
    m_heading_required('生年月日');
    f_input(['type' => 'date', 'class' => 'Application-form__input__glay-border', 'name' => 'inq_birthday']);

    // 性別
    m_heading_required('性別');
    a_select(['name' => 'inq_sex', 'class' => 'Application-form__input__glay-border'], [['attributes' => ['hidden' => ''], 'text' => '選択してください'], ['attributes' => ['value' => '0'], 'text' => '男性'], ['attributes' => ['value' => '1'], 'text' => '女性'], ['attributes' => ['value' => '2'], 'text' => 'その他'], ['attributes' => ['value' => '3'], 'text' => '無回答']]);

    // メールアドレス
    m_heading_required('メールアドレス');
    f_input(['type' => 'email', 'class' => 'Application-form__input__glay-border js-han-input', 'placeholder' => '例）shukatsu.taro123@example.com', 'name' => 'inq_email', 'id' => 'inqEmail']);

    // 電話番号（半角ハイフンなし）
    m_heading_required('電話番号(ハイフンなし)');
    f_input(['type' => 'tel', 'class' => 'Application-form__input__glay-border js-han-input', 'placeholder' => '例）09012345678', 'name' => 'inq_tel', 'id' => 'inqTel']);

    // 大学名
    m_heading_required('大学名');
    f_input(['type' => 'text', 'class' => 'Application-form__input__glay-border js-zen-input', 'placeholder' => '例）就活義塾大学', 'name' => 'inq_univ', 'id' => 'inqUniv']);

    // 学部名
    m_heading_required('学部名');
    f_input(['type' => 'text', 'class' => 'Application-form__input__glay-border js-zen-input', 'placeholder' => '例）文学部', 'name' => 'inq_faculty', 'id' => 'inqFaculty']);

    // 学科名
    m_heading_required('学科名');
    f_input(['type' => 'text', 'class' => 'Application-form__input__glay-border js-zen-input', 'placeholder' => '例）人間科学科', 'name' => 'inq_department', 'id' => 'inqDepartment']);

    // 卒業年
    m_heading_required('卒業年');
    a_select_gradu_year();

    // 住所
    ?>
    <span class="p-country-name" style="display:none;">Japan</span>
    <?php
    m_heading_required('住所');
    //   郵便番号
    a_label('郵便番号', '');
    f_input(['type' => 'text', 'class' => 'Application-form__input__glay-border p-postal-code js-han-input', 'size' => '8', 'placeholder' => '例）2220022', 'name' => 'inq_postalcode', 'id' => 'inqPostalcode']);
    //   都道府県
    a_label('都道府県', '');
    f_input(['type' => 'text', 'class' => 'Application-form__input__glay-border p-region js-zen-input', 'placeholder' => '例）東京都', 'name' => 'inq_pref', 'id' => 'inqPref']);
    //   市区町村番地
    a_label('市区町村番地', '');
    f_input(['type' => 'text', 'class' => 'Application-form__input__glay-border p-locality p-street-address p-extended-address js-zen-input', 'placeholder' => '例）港区白金台', 'name' => 'inq_address', 'id' => 'inqAddress']);
    //   建物名・部屋番号
    a_label('建物名・部屋番号', '');
    f_input(['type' => 'text', 'class' => 'Application-form__input__glay-border js-zen-input', 'placeholder' => '例）就活マンション１０５', 'name' => 'inq_bldg', 'id' => 'inqBldg']);
    // 自由記述欄
    a_heading('自由記述欄');
    a_free_textbox();

    // プライバシーポリシーの文章
    m_heading_required('プライバシーポリシー');
    a_form_policy();

    // プライバシーポリシーチェックボックス
    a_form_agree();

    //送信ボタン
    a_form_send('確認画面に進む', 'formSend()');
    ?>
  </form>
<?php
    a_section_end();
  }

  function a_check_message()
  {
?>
  <div class="Check__message-text">
    <p>お問い合わせ内容はこちらでよろしいでしょうか？</P>
    <p>よろしければ「送信」ボタンを押してください。</p>
  </div>
<?php
  }

  function m_check_data($data)
  {
?>
  <div class="Check__info">
    <?php
    foreach ($data as $item) :
    ?>
      <div class="Check__info__line">
        <p class="Check__info__item"><?= $item['name']; ?></p>
        <p class="Check__info__writing"><?= $item['value']; ?></p>
      </div>
    <?php
    endforeach;
    ?>
  </div>
<?php
  }

  function o_check($disp_data)
  {
?>
  <div class="Check">
    <?php
    a_form_backbtn('戻る');
    a_check_message();
    m_check_data($disp_data);
    a_form_send('送信する', 'confirmBtn()');
    ?>
  </div>
<?php
  }

  function a_thanks_text()
  {
?>
  <p>
    ○○さん
  </p>
  <p>
    エージェント会社への申し込みありがとうございました。
  </p>
  <p>
    ご登録いただいているメールアドレスあてに完了メールをお送りしておりますのでご確認をお願いいたします。
  </p>
  <p>
    メールが届かない場合は、正しく情報が入力されていない可能性がありますので、もう一度入力していただくか、下記問い合わせ先までご連絡をお願いいたします。
  </p>
  <p>
    ※こちらの画面はこのまま閉じてください。
  </p>
  <p>
    【お問い合わせはこちら】
    <br>
    株式会社boozer CRAFT事務局
    <br>
    ○○○○@gmail.com
  </p>
<?php
  }

  function o_thanks()
  {
?>
  <div class="Finish">
    <div class="Finish__message">
      <?php
      a_thanks_text();
      ?>
    </div>
    <?php
    a_form_send('テキスト', '');
    ?>
  </div>
<?
  }
  // PC版ようのメッセージ
  function a_foot_message()
  {
?>
  <div class="Apply-footer__message__pc">
    <p>問い合わせBOXの<span id="inBoxPc" class="Apply-footer__message__in-box"></span>社に</p>
  </div>
<?php
  }

  function m_foot_inquirybtn()
  {
?>
  <button class="Apply-footer__apply-btn" onclick="inquiryBtn()">
    <p>
      まとめて<br class="New-line__sp">問い合わせる
    </p>
  </button>
<?php
  }

  function m_foot_showboxbtn()
  {
?>
  <div class="Show-box" id="show_box">
    <div class="Show-box__text">
      <p>
        お問い合わせ<br>BOX
      </p>
    </div>
    <div class="Show-box__icon">
      <div class="Show-box__icon__number">
        <p id="boxBadge">
        </p>
      </div>

      <i class="fa-solid fa-box-open"></i>
    </div>
  </div>
<?php
  }

  function o_foot()
  {
?>
  <div class="Box-and-apply-footer">
    <div class="Box-mobile" id="box_mobile">
      <?php
      o_box();
      ?>
    </div>

    <div class="Apply-footer">
      <div class="Apply-footer_inner">
        <?php
        a_foot_message();
        m_foot_inquirybtn();
        m_foot_showboxbtn();
        ?>
      </div>
    </div>
  </div>
<?php
  }



  function a_footer_copyright()
  {
?>
  <small class="Footer__copyright">
    &copy; 2022 株式会社boozer All rights reserved
  </small>
<?php
  }



  function o_footer()
  {
?>
  <div class="Footer">
    <div class="Footer__inner">
      <?php
      a_header_title();
      a_header_nav();
      a_footer_copyright();
      ?>
    </div>
  </div>
<?php
  }
