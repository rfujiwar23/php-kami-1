var vm = new Vue({
  el: "#schedule",
  data: {
    schedules: [
      {
        roundNumberText: `<p>1回戦<br>1次審査</p>`,
        roundInfo: `<p>(仮）動画を提出</p>`,
        innerLink: "first",
      },
      {
        roundNumberText: `<p>2回戦<br>2次審査</p>`,
        roundInfo: `<p>(仮）動画を提出</p>`,
        innerLink: "second",
      },
      {
        roundNumberText: `<p>決勝<br>エントリー</p>`,
        roundInfo: `<p>(仮）動画を提出</p>`,
        innerLink: "third",
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