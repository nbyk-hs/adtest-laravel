@extends('layout.contact')

@section('css')
@endsection

@section('content')
<h1>contact</h1>
<form action="/confirm" method="post">
    @csrf
    <table>
        <tr>
            <th>お名前<span>※</span></th>
            <td id="name">
                <input type="text" name="last-name" placeholder="例：山田">
                <input type="text" name="first-name" placeholder="例：太郎">
            </td>
        </tr>
        <tr>
            <th>性別<span>※</span></th>
            <td id="gender">
                <input type="radio" name="gender" value="男性"><label>男性</label>
                <input type="radio" name="gender" value="女性"><label>女性</label>
                <input type="radio" name="gender" value="その他"><label>その他</label>
            </td>
        </tr>
        <tr>
            <th>メールアドレス<span>※</span></th>
            <td id="mail">
                <input type="email" name="mail" placeholder="test@example.com">
            </td>
        <tr>
        <tr>
            <th>電話番号<span>※</span></th>
            <td id="tel">
                <input name="tel1"><span> -</span>
                <input name="tel2"><span> -</span>
                <input name="tel3">
            </td>
        </tr>
        <tr>
            <th>住所<span>※</span></th>
            <td id="address">
                <input type="text" name="address" placeholder="例）東京都渋谷区千駄ヶ谷1-2-3">
            </td>
        </tr>
        <tr>
            <th>建物名<span>※</spam></th>
            <td id="building">
                <input type="text" name="building" placeholder="例）千駄ヶ谷マンション101">
            </td>
        </tr>
        <tr>
            <th>お問い合わせの種類<span>※</span></th>
            <td id="category">
                <select name="category_id" >
                    <option select disabled>選択してください</option>
                    <option value="商品のお届けについて">1.商品のお届けについて</option>
                    <option value="商品の交換について">2.商品の交換について</option>
                    <option value="商品トラブル">3.商品トラブル</option>
                    <option value="ショップへのお問い合わせ">4.ショップへのお問い合わせ</option>
                    <option value="その他">5.その他</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>お問い合わせの内容<span>※</span></th>
            <td id="detail">
                <textarea name="detail" placeholder="お問い合わせの内容をご記載ください"></textarea>
        </tr>
    </table>
    <button type="submit">確認画面</button>
</form>


@endsection


