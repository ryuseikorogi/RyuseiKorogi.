
    <form method="post" action=""> <?php //送信先が空なので、自分自身（index.php）を再度呼び出す
                                    ?>
      <div class="element_wrap">
        <label>氏名</label>
        <input type="text" name="your_name" value="<?php if (!empty($_POST['your_name'])) {
                                                      echo $_POST['your_name'];
                                                    } ?>">
        <!-- POSTパラメータが空じゃない場合のみvalue属性にセット -->
      </div>
      <div class="element_wrap">
        <label>メールアドレス</label>
        <input type="mail" name="email" value="<?php if (!empty($_POST['email'])) {
                                                  echo $_POST['email'];
                                                } ?>">
      </div>
      <div class="element_wrap">
        <label>性別</label>
        <label for="gender_male"><input id="gender_male" type="radio" name="gender" value="male">男性</label>
        <label for="gender_female"><input id="gender_female" type="radio" name="gender" value="female">女性</label>
      </div>
      <div class="element_wrap">
        <label>年齢</label>
        <select name="age">
          <option value="">選択してください</option>
          <option value="1">〜19歳</option>
          <option value="2">20歳〜29歳</option>
          <option value="3">30歳〜39歳</option>
          <option value="4">40歳〜49歳</option>
          <option value="5">50歳〜59歳</option>
          <option value="6">60歳〜</option>
        </select>
      </div>
      <div class="element_wrap">
        <label>お問い合わせ内容</label>
        <textarea name="contact"></textarea>
      </div>
      <div class="element_wrap">
        <label for="agreement"><input id="agreement" type="checkbox" name="agreement" value="1">プライバシーポリシーに同意する</label>
      </div>
      <input type="submit" name="btn_confirm" value="入力内容を確認する">
    </form>