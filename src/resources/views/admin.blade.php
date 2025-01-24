<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact-form2</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">

<body>
    <header class="header">
        <div class="header__inner">
            <a href='/' class="header__logo">FashionablyLate</a>
            <a href="/login" class="logout__button">logout</a>
        </div>
            
    </header>
    <main>
        <div class="admin__content">
            <div class="admin__heading">
                <h3>Admin</h3>
            </div>
        </div>

        <form action="/admin/search" class="search-form" method="get">
            @csrf
            <div class="search-form__item">
                <input type="text" class="search-form__item-input" placeholder="名前やメールアドレスを入力してください" name="keyword" value="{{ old('keyword') }}">
                <select class="search-form__item-select--gender" name="gender">
                    <option value="性別" checked>性別</option>
                    <option value="男性">男性</option>
                    <option value="女性">女性</option>
                    <option value="その他">その他</option>
                </select>
                <select class="search-form__item-select--kinds" name="kinds">
                    <option value="お問い合わせの種類" checked>お問い合わせの種類</option>
                    <option value="1.商品のお届けについて">1.商品のお届けについて</option>
                    <option value="2.商品の交換について">2.商品の交換について</option>
                    <option value="3.商品トラブル">3.商品トラブル</option>
                    <option value="4.ショップへのお問い合わせ">4.ショップへのお問い合わせ</option>
                    <option value="5.その他">5.その他</option>
                </select>
                <input class="search-form__item-calender" type="date" name="date">
                <div class="search-form__button">
                    <button class="search-form__button-search" type="submit">検索</button>
                    <button class="search-form__button-reset" type="submit">リセット</button>
                </div>
            </div>
        </form>
        <form action="" class="export">
            <div class="export__button">
                <button class="export__button-submit" type="submit">エクスポート</button>
            </div>
        </form>
             <div class="paginate">
            {{ $contacts->links() }}
            </div>
        <form action="/modal" class="admin" method="get">
            <div class="admin-table">
                <table class="admin-table__inner">
                    <tr class="admin-table__row">
                        <th class="admin-table__header-name">お名前</th>
                        <th class="admin-table__header-gender">性別</th>
                        <th class="admin-table__header-email">メールアドレス</th>
                        <th class="admin-table__header-kinds">お問い合わせの種類</th>
                        <th class="admin-table__header-detail"></th>
                    </tr>
                    @foreach ($contacts as $contact)
                    <tr class="admin-table__row">
                        <td class="admin-table__text--name">
                            <input class="admin-table__text-name" type="name" name="name">{{$contact->last_name}}　{{$contact->first_name}}
                        </td>
                        <td class="admin-table__text--gender">
                            <input class="admin-table__text-gender" type="text" name="gender">{{$contact->gender}}
                        </td>
                        <td class="admin-table__text--email">
                            <input class="admin-table__text-email" type="email" name="email">{{$contact->email}}
                        </td>
                        <td class="admin-table__text--kinds">
                            <input class="admin-table__text-kinds" type="text" name="kinds">{{$contact->kinds}}
                        </td>
                        <td class="admin-table__text--button">
                            <button class="admin-table__text-button" type="submit" wire:click="openModal()">詳細</button>
                        </td>      
                    </tr>
                    @endforeach
                </table>
            </div>
        </form>
    </main>    
</body>
</html>