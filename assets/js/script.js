var vm = new Vue({
  el: "#schedule",
  data: {
    schedules: [
      {
        roundNumberText: `<p>1回戦<br>1次審査</p>`,
        roundInfo: `<p>(仮）動画を提出</p>`,
        innerLink: "first",
        info: `
        タイトル・コンセプト説明を踏まえて、クリエイティブ・映像関係に強い企業様
        （複数社）が1次審査を実施。<br>
        ご応募いただいた映像作品の中から、構成・内容ともに優れた作品を厳選して、
        2回戦進出者orチームを決定します。<br>
        <span><strong>*</strong> 1次審査・2次審査は同時期に実施します。</span>
        `,
      },
      {
        roundNumberText: `<p>2回戦<br>2次審査</p>`,
        roundInfo: `<p>(仮）動画を提出</p>`,
        innerLink: "second",
        info: `
        1次審査同様タイトル・コンセプト説明を踏まえて、
        クリエイティブ・映像関係に強い企業様（複数社）が2回戦用の映像を2次審査。<br>
        ご応募いただいた映像作品の中から、新しい感性に満ち溢れた作品を厳選して、
        12名（チーム）の決勝進出者orチームを決定します。<br>
        <span><strong>*</strong>1次審査・2次審査は同時期に実施します。</span>
        `,
      },
      {
        roundNumberText: `<p>決勝<br>エントリー</p>`,
        roundInfo: `<p>(仮）動画を提出</p>`,
        innerLink: "third",
        info: `
        タイトル・コンセプト説明を踏まえて、他業界のクリエイター、カミカリスマ
        美容師の方々を審査員に迎え、事前審査を行います。<br>
        決勝戦は、12月13日に開催される<strong>KAMI CHARISMA 2023
        AWARD</strong>内にて、進出者の作品を紹介した上で、見事グランプリに輝いた
        美容師もしくはチームを発表致します。
        `,
      },
      {
        roundNumberText: `<p>決勝戦</p>`,
        roundInfo: `<p>(仮）動画を提出</p>`,
        innerLink: "fourth",
      },
    ],
  },
});

var vm = new Vue({
  el: "#rd-first",
  data: {
    tableLists1: [
      {
        header: "項目1",
        bodyText: `
            項目内容1のテキストを入れる
          `,
        id: 1,
      },
      {
        header: "項目2",
        bodyText: `
              項目内容2のテキストを入れる
            `,
        id: 2,
      },
      {
        header: "項目3",
        bodyText: `
              項目内容3のテキストを入れる
            `,
        id: 3,
      },
    ],
  },
});

var vm = new Vue({
  el: "#rd-second",
  data: {
    tableLists2: [
      {
        header: "項目1",
        bodyText: `
              項目内容1のテキストを入れる
            `,
        id: 1,
      },
      {
        header: "項目2",
        bodyText: `
                項目内容2のテキストを入れる
              `,
        id: 2,
      },
      {
        header: "項目3",
        bodyText: `
                項目内容3のテキストを入れる
              `,
        id: 3,
      },
    ],
  },
});

var vm = new Vue({
  el: "#rd-third",
  data: {
    tableLists3: [
      {
        header: "項目1",
        bodyText: `
              項目内容1のテキストを入れる
            `,
        id: 1,
      },
      {
        header: "項目2",
        bodyText: `
                項目内容2のテキストを入れる
              `,
        id: 2,
      },
      {
        header: "項目3",
        bodyText: `
                項目内容3のテキストを入れる
              `,
        id: 3,
      },
    ],
  },
});
