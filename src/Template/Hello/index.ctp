<h1>サンプル見出し</h1>
<p>フォームの送信</p>
<form method="get" action="../hello/sendForm">
  <input type="hidden" name="check1" value="入力がなかったよ";>
  <input type="hidden" name="radio2" value="入力がないよ";>
  <input type="checkBox" name="check1" id="c1">
    <label for="c1">チェック</label><br />
  <input type="radio" name="radio1" id="r1" value="No.1">
    <label for="r1">ラジオ1</label><br />
  <input type="radio" name="radio2" id="r2" value="No.2">
    <label for="r1">ラジオ2</label><br />
  <select name="select1">
    <option value="windows">windows</option>
    <option value="Lunux">Linux</option>
    <option value="MacOS">MacOSX</option>
  </select>
  <input type="text" name="text1" />
  <input type="submit" />