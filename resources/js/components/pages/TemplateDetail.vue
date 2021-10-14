<template>
    <article>
        <h1 class="title">目標シートテンプレート<br>詳細</h1>
        <div class="eval-sheet-content">           
            <section>
                <h4 class="sub-heading"><b-badge variant="info"><span>テンプレート名</span></b-badge><span class="label-text">{{templateName}}</span></h4>
            </section>    
            <section :key="aim" v-for="aim in aims">
                <b-col cols="4">
                    <b-badge variant="info"><span>目標種別</span></b-badge>
                    <span class="label-text">{{aim.aimgroup}}</span>
                </b-col>
                <hr>
                <b-container class="bv-example-row">
                    <b-row align-h="start">
                        <b-col cols="5"><b-badge variant="info"><span class="item1">分類</span></b-badge><span class="label-text">{{aim.aimkind}}</span></b-col>
                        <b-col cols="4"><b-badge variant="info"><span>ウエイト</span></b-badge><span class="label-text">{{aim.weight}}</span></b-col>
                    </b-row>
                </b-container>
                <div :key="aimcontent" v-for="aimcontent in aim.aimcontents">
                    <div class="sec-content">
                        <div class="item">
                            <b-row>
                                <b-col cols="15">
                                    <b-badge variant="info" >
                                    <span class="badge-size">項目名</span></b-badge><span class="label-text">{{aimcontent.aimTitle}}</span>
                                </b-col>  
                            </b-row>
                        </div> 
                        <b-badge variant="info" ><span class="badge-size">項目詳細</span></b-badge>
                        <div class="item2">
                            <p class="card-text">{{aimcontent.titleDetail}}</p>
                        </div>   
                    </div>
                </div> 
           </section>
            <div class="buttons">
                <b-button variant="success" ><div class="backbutton"><a href="/aimtemplatelist">戻る</a></div></b-button>
                <b-button variant="primary">編集</b-button>
                <b-button variant="danger">削除</b-button>
            </div>
        </div>
    </article>
</template>
<script>
  export default {
    name: 'template-detail',
  data() {
       return{
        templateName: '2021下期一般社員リーダー',
        aims:[
                {   
                    aimgroup:'行動目標',
                    aimkind:'リーダーに求める行動目標',
                    weight:50,
                    aimcontents:[
                        {aimTitle:'あいうえお',
                        titleDetail:'あいうえお'},
                        {aimTitle:'かきくけこ',
                        titleDetail:'かきくけこ'}
                    ],
                 },
                {   
                    aimgroup:'数値目標',
                    aimkind:'リーダーに求める数値目標',
                    weight:50,
                    aimcontents:[
                        {aimTitle:'かきくけこ',
                         titleDetail:'さしすせそ'},
                    ],
                 },
            ],
      }
    }
  }

</script>

<style>

.title{
    font-family: 'Nunito Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    padding:10px;
    font-size: 32px;
    color: #636363;
    line-height: 46px;
}
.item{
    margin-bottom: 5px;
}
.item2{
    border: 1px solid #dbdbdc;
    border-radius: 5px;
    padding: 5px;
}
.badge-size2{
    margin-top: 2px;
}
.buttons{
    display: flex;
    justify-content: flex-end;
}
.buttons a{
    color: #fff;
}
.buttons a:hover{
    color: #fff;
}
</style>
