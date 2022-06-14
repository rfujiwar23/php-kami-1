new Vue({
    el: "#app",
    data: {
      articles: [
         {
            articleLink: "news/article/article1.php",
            date: "2022.5.21",
            title: "1回戦・2回戦の応募素材について",
            body: "私は時間もしどんな束縛者ってののうちをしたた。いったい私は時間もしどんな束縛者ってののうちをしたた。"
          },
           {
            articleLink: "news/article/article2.php",
            date: "2022.5.22",
            title: "2回戦・3回戦の応募素材について",
            body: "私は時間もしどんな束縛者ってののうちをしたた。いったい私は時間もしどんな束縛者ってののうちをしたた。"
          },
           {
            articleLink: "news/article/article3.php",
            date: "2022.5.23",
            title: "決勝戦の応募素材について",
            body: "私は時間もしどんな束縛者ってののうちをしたた。いったい私は時間もしどんな束縛者ってののうちをしたた。"
          },
           {
            articleLink: "#",
            date: "2022.5.24",
            title: "1回戦・2回戦の応募素材について",
            body: "私は時間もしどんな束縛者ってののうちをしたた。いったい私は時間もしどんな束縛者ってののうちをしたた。"
          },
           {
            articleLink: "#",
            date: "2022.5.25",
            title: "1回戦・2回戦の応募素材について",
            body: "私は時間もしどんな束縛者ってののうちをしたた。いったい私は時間もしどんな束縛者ってののうちをしたた。"
          },
           {
            articleLink: "#",
            date: "2022.5.26",
            title: "1回戦・2回戦の応募素材について",
            body: "私は時間もしどんな束縛者ってののうちをしたた。いったい私は時間もしどんな束縛者ってののうちをしたた。"
          }
      ],
      currentPage: 1,
    },
    computed:{
        toBeShown() {
          return this.articles.slice(0, this.currentPage * 3);
      },
      totalPages() {
          return Math.ceil( this.articles.length / 3);
      }
    },
    methods: {
        nextPage(){
          if(this.currentPage <  this.totalPages) this.currentPage++;
      },
      prevPage(){
          this.currentPage = this.currentPage - 1 || 1;
      }
    }
  })


