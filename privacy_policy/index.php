<?php
include '../head.php'
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/navigation.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title><?php echo $var; ?></title>
    <meta name="description" content="<?php echo $metaDescription ?>">
    <meta name="keywords" content="<?php echo $metaKeywords ?>">
    <meta name="twitter:title" content="<?php echo $var; ?>">
    <meta name="twitter:description" content="<?php echo $metaDescription ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300;400;500;600;700&family=Noto+Sans+JP:wght@100;500;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/image/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/image/favicon/favicon-16x16.png">
    <link rel="manifest" href="../assets/image/favicon/site.webmanifest">
</head>

<body>
    <div class="wrapper">
        <?php
        include "../components/kamiOneNavbar.php";
        echo createHeader();
        ?>

        <div class="top">
            <h2>プライバシー・ポリシー</h2>
        </div>

        <div class="terms_of_service">
            <div class="container">


                <div class="my-4 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <a onclick="history.back()" class="previous-link"><i class="fa-solid fa-rotate-left"></i> 前に戻る</a>
                    <div class="title">
                        <h2 class="text-center">プライバシー・ポリシー</h2>
                    </div>
                    <div class="bodyText pt-5 px-3 mt-2 mb-5">
                        <div class="points">

                            <p>インベード株式会社は、事業運営上多くの個人情報を取扱うこととなるため、当社倫理綱領に基づいて本方針を定め、個人情報管理体制を確立し、企業として責任ある対応を実現するものとします。
                            </p>

                            <ul>
                                <li>個人情報の利用の目的をできる限り特定し、当該目的の達成に必要な範囲内で適切に取扱います。また、目的外利用を行なわないための措置を講じます。</li>
                                <li>個人情報は、適法かつ適正な方法で取得します。</li>
                                <li>個人情報は、本人の同意なく第三者に提供しません。</li>
                                <li>個人情報の管理にあたっては、漏洩・滅失・毀損の防止及び是正、その他の安全管理のために必要かつ適切な措置を講じるよう努めます。</li>
                                <li>個人情報の取扱いにあたっては、その情報を提供した本人が適切に関与し得るよう努め、可能な限り正確かつ最新の内容に保つよう努力します。</li>
                                <li>個人情報保護に関する法令を遵守し、また個人情報保護に関する社内規程を定め、継続的な見直しを行い遵守します。</li>
                                <li>個人情報保護に関する苦情及び相談に対応する窓口を設けて、適切に対応するよう努めます。</li>
                            </ul>
                            <p>インベード株式会社</p>
                            <p>代表責任者　蕪木　恭兵</p>
                            <p>（附則）</p>
                            <p>2021年10月5日　制定・施行</p>

                            <h6>個人情報の取扱いについて</h6>
                            <p>インベード株式会社（以下「当社」といいます）は、当プライバシーポリシーを掲示し、当プライバシーポリシーに準拠して提供されるサービス（以下「本サービス」といいます）の利用企業・提携企業・団体等（以下「利用企業等」といいます）および本サービスをご利用になる方（以下「ユーザー」といいます）のプライバシーを尊重し、ユーザーの個人情報（以下の定義に従います）の管理に細心の注意を払い、これを取扱うものとします。
                            </p>

                            <h6>個人情報</h6>
                            <p>個人情報とは、ユーザー個人に関する情報であって、当該情報を構成する氏名、住所、電話番号、メールアドレス、会社名、学校名その他の記述等により当該ユーザーを識別できるものをいいます。また、その情報のみでは識別できない場合でも、他の情報と容易に照合することができ、結果的にユーザー個人を識別できるものも個人情報に含まれます。
                            </p>

                            <h6>個人情報の利用目的</h6>
                            <p>個人情報の利用目的は以下の通りです。利用目的を超えて利用することはありません。</p>

                            <ul>
                                <li>本サービスの利用に伴う連絡・メールマガジン・DM・各種お知らせ等の配信・送付</li>
                                <li>属性情報･端末情報・位置情報・行動履歴等に基づく広告・コンテンツ等の配信・表示、本サービスの提供</li>
                                <li>本サービスの改善・新規サービスの開発・ポイント利用状況の調査・分析およびマーケティング</li>
                                <li>キャンペーン・アンケート・モニター・取材等の実施</li>
                                <li>空メール送信者に対するURL情報の配信</li>
                                <li>本サービスに関するご意見、お問い合わせ、クチコミ投稿内容の確認・回答</li>
                                <li>利用規約等で禁じている、商用・転用目的での各種申込行為、各種多重申込、権利譲渡、虚偽情報登録などの調査と、それに基づく当該申込内容の詳細確認</li>
                            </ul>









                            <h6>個人情報提供の任意性</h6>
                            <p>本サービスにおいてそれぞれ必要となる項目を入力いただかない場合は、本サービスを受けられない場合があります。</p>

                            <h6>個人情報の第三者への提供</h6>
                            <p>当社は、原則として、ユーザー本人の同意を得ずに個人情報を第三者に提供しません。ただし提供先・提供情報内容を特定したうえで、ユーザーの同意を得た場合に限り提供します。</p>

                            <ul>
                                <li>提供先および目的について<br>資料請求・応募・予約・購入等のサービス提供のため、本サービス利用企業等への提供</li>
                                <li>提供する個人情報の項目<br>ユーザーから取得した情報（サービス利用履歴ほか、閲覧・検索・ブックマーク等あらゆる行動履歴に該当する情報を含む）のうち、利用目的の達成に必要な範囲の情報項目とします。
                                </li>
                                <ul>提供の手段又は方法<br>書面もしくは電磁的な方法による送付または送信。</ul>
                            </ul>

                            <p>ただし、以下の場合は、関係法令に反しない範囲で、ユーザーの同意なく個人情報を提供することがあります。</p>

                            <ul>
                                <li>ユーザーが第三者に不利益を及ぼすと判断した場合</li>
                                <li>公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって、ユーザー本人の承諾を得ることが困難である場合</li>
                                <li>国の機関若しくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合で、ユーザー本人の同意を得ることによりその事務の遂行に支障を及ぼすおそれがある場合
                                </li>
                                <li>裁判所、検察庁、警察またはこれらに準じた権限を有する機関から、個人情報についての開示を求められた場合</li>
                                <li>ユーザー本人から明示的に第三者への開示または提供を求められた場合</li>
                                <li>法令により開示または提供が許容されている場合</li>
                                <li>合併その他の事由による事業の承継に伴い個人情報を提供する場合であって、承継前の利用目的の範囲で取り扱われる場合</li>
                            </ul>

                            <h6>第三者提供に関する免責事項</h6>
                            <p>以下の場合は、第三者による個人情報の取得に関し、当社は何らの責任を負いません。</p>

                            <ul>
                                <li>ユーザー自らが本サービスの機能または別の手段を用いて利用企業等に個人情報を明らかにする場合（なお、利用企業等における個人情報の取扱いについては、各利用企業に直接お問合せください）
                                </li>
                                <li>本サービスに入力した情報により、期せずして本人が特定できてしまった場合</li>
                                <li>本サービスからリンクされる外部サイトにおいて、ユーザーより個人情報が提供され、またそれが利用された場合</li>
                                <li>ユーザー本人以外がユーザー個人を識別できる情報（ID・パスワード等）を入手した場合</li>
                            </ul>

                            <h6>個人情報処理の外部委託</h6>
                            <p>当社は、個人情報取扱い業務の一部または全部を外部委託することがあります。なお、委託先における個人情報の取扱いについては当社が責任を負います。</p>

                            <h6>統計処理されたデータの利用</h6>
                            当社は、提供を受けた個人情報をもとに、個人を特定できないよう加工した統計データを作成することがあります。個人を特定できない統計データについては、当社は何ら制限なく利用することができるものとします。
                            <p></p>

                            <h6>個人情報の変更等</h6>
                            <p>原則としてユーザー本人に限り、「個人情報の利用目的」の通知、登録した個人情報の開示、訂正、追加または削除、利用停止、ならびに第三者への提供の停止（以下「個人情報の変更等」といいます）を求めることができるものとします。具体的な方法については下記の個人情報管理の問い合わせ先にご連絡ください｡ただし、以下の場合は個人情報の変更等に応じないことがあります。
                            </p>

                            <ul>
                                <li>ユーザー本人または第三者の生命、身体、財産その他の権利・利益を害するおそれがある場合</li>
                                <li>本サービスの適正な実施に著しい支障を及ぼすおそれがある場合</li>
                                <li>他の法令に違反することとなる場合</li>
                            </ul>

                            <p>また、当該個人情報の変更等に多額の費用を要する場合､その他の、個人情報の変更等を行うことが困難な場合であって、ユーザーの権利・利益を保護するため必要なこれに代わるべき措置をとるときは、個人情報の変更等に応じないことがあります。
                            </p>

                            <h6>個人情報の正確性</h6>
                            <p>当社は、ご提供いただいた個人情報を正確にデータ処理するように努めます。ただし、ご提供いただいた個人情報の内容が正確かつ最新であることについては、ユーザーが責任を負うものとします。
                            </p>

                            <h6>機微な個人情報の取得制限</h6>
                            <p>当社は、次に示す内容を含む個人情報の取得は原則として行いません。ただし、ユーザーが自ら提供した場合は、この限りではありません。</p>

                            <ul>
                                <li>思想、信条及び宗教に関する事項</li>
                                <li>人種、民族、門地、本籍地（所在都道府県に関する情報を除く）、身体・精神障害、犯罪歴、その他社会的差別の原因となる事項</li>
                                <li>勤労者の団結権、団体交渉及びその他団体行動の行為に関する事項</li>
                                <li>集団示威行為への参加、請願権の行使、及びその他政治的権利の行使に関する事項</li>
                                <li>保健医療及び性生活</li>
                            </ul>

                            <h6>本人確認について</h6>
                            <p>当社は、各Webサービスへの会員登録や会員が本サービスを利用する場合、個人情報の開示、訂正、削除もしくは利用停止の求めに応じる場合など、個人を識別できる情報（氏名､住所､電話番号､生年月日､メールアドレス､会員番号､パスワードなど）により、本人であることを確認します。ただし、本人以外が個人を識別できる情報を入手し使用した場合、当社は責任を負いません
                            </p>

                            <h6>属性情報・端末情報・位置情報・行動履歴等の取得及び利用について</h6>
                            <ul>
                                <li>
                                    属性情報・端末情報・位置情報・行動履歴等（以下「行動履歴等」といいます）のうちCookie等について<br>
                                    当社は、ユーザーのプライバシーの保護、利便性の向上、広告の配信および統計データの取得のため、Cookieを使用します。また、CookieやJavaScript等の技術を利用して、ご提供いただいた情報のうち、年齢や性別、職業、居住地域など個人が特定できない属性情報（組み合わせることによっても個人が特定できないものに限られます）や端末情報、本サービスサイト内におけるユーザーの行動履歴（アクセスしたURL、コンテンツ、参照順等）およびスマートフォン等利用時の、ユーザーの承諾・申込みに基づく位置情報を取得することがあります。ただし、Cookie及び行動履歴等には個人情報は一切含まれません。また、本サービスでは、ユーザーに適切な広告を配信するために行動ターゲティング広告サービスを利用しています。（携帯電話からアクセスしている場合はオプトアウト機能が利用できないことがあります）
                                </li>
                                <li>
                                    行動履歴等のうち以下の場合のアクセスログ等について<br>
                                    当社はユーザーがログインして本サービスを利用した場合には、個人を特定したうえで、当該ログイン以前からの行動履歴等を用いて、広告・コンテンツ等の配信・表示および本サービスの提供をする場合があります。こちらの広告等の配信停止については、下記の個人情報管理の問い合わせ先にご連絡ください｡

                                </li>
                            </ul>
                            <h6>個人情報管理責任者</h6>
                            <p>インベード株式会社<br>
                                当該サービス　担当執行役員<br>
                                個人情報に関するお問い合わせはこちら</p>

                            <p>
                                【お問い合わせ】<br>
                                インベード株式会社<br>
                                当該サービス担当者宛<br>
                                メール：kamismax-info@kamisma.com
                            </p>

                            <p>※お電話の場合は、正確を期すため録音している場合があります。あらかじめご了承ください</p>

                            <h6>プライバシーポリシーの変更</h6>
                            <p>当社は、法令等の定めがある場合を除き、プライバシーポリシーを随時変更することができるものとします。</p>
                        </div>
                    </div>
                    <!-- <a class="btn btn-primary" onclick="history.back()">前のページへ戻る</a> -->
                </div>
            </div>
        </div>
    </div>
    <?php
    include "../components/footer.php";
    echo kamioneFooter();
    ?>
</body>

</html>