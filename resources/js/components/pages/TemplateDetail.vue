<template>
        <article>
            <section>
                <h1 class="title">目標シートテンプレート<br>詳細</h1>
                <div class="sec-content">
                    <div class=item1>
                        <h2>テンプレート名</h2>
                        <div class="templatename">一般社員_2020</div>
                    </div>
                </div>
            </section>
            <div class="sec-content">
                    <h4 class="sub-heading">目標種別　　行動目標</h4>
                      <b-col>
                        <div class="item3">
                            <b-badge variant="info" class="mr-3">分類名</b-badge>社員に求める行動目標
                            <b-badge variant="info" class="item-name2"><span class="badge-size">ウェイト</span></b-badge>
                            <div class="amount">50</div>    
                        </div>
                      </b-col>
                    <b-card class="mt-2">
                            <b-container class="bv-example-row">
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">項目名</span></b-badge></b-col>
                                    <b-col cols="5"><p class="label-text">メンバーへの適切な指導</p></b-col>
                                </b-row>
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">詳細</span></b-badge></b-col>
                                    <b-col cols="5"><p class="label-text">自分のことがきちんとできる（基本のルール）</p></b-col>
                                </b-row>
                            </b-container>
                    </b-card>
                    <b-card class="mt-2">
                            <b-container class="bv-example-row">
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">項目名</span></b-badge></b-col>
                                    <b-col cols="10"><p class="label-text">メンバーへの適切な指導</p></b-col>
                                </b-row>
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">詳細</span></b-badge></b-col>
                                    <b-col cols="10"><p class="label-text">自分のことがきちんとできる（基本のルール）</p></b-col>
                                </b-row>
                            </b-container>
                    </b-card>
            </div>
            <div class="sec-content">
                    <h4 class="sub-heading">目標種別　　数値目標</h4>
                    <b-col>
                        <div class="item3">
                            <b-badge variant="info" class="mr-3">分類名</b-badge>社員に求める数値目標
                            <b-badge variant="info" class="item-name2"><span class="badge-size">ウェイト</span></b-badge>
                            <div class="amount">50</div>                    
                        </div>                                                 
                    </b-col>
                    <b-card class="mt-2">
                            <b-container class="bv-example-row">
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">項目名</span></b-badge></b-col>
                                    <b-col cols="10"><p class="label-text">売上達成率</p></b-col>
                                </b-row>
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">詳細</span></b-badge></b-col>
                                    <b-col cols="10"><p class="label-text">自分自身の売上達成率で計算して下さい。病気などによる長期離脱やその他イレギュラーによる未達は都度考慮します。</p></b-col>
                                </b-row>
                            </b-container>
                    </b-card>
                    <b-card class="mt-2">
                            <b-container class="bv-example-row">
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">項目名</span></b-badge></b-col>
                                    <b-col cols="10"><p class="label-text">客先評価</p></b-col>
                                </b-row>  
                                <b-row align-h="start">
                                    <b-col cols="1"><b-badge variant="info"><span class="badge-size">詳細</span></b-badge></b-col>
                                    <b-col cols="10">
                                        <p class="label-text">
                                        1 　　69%以下<br>
                                        2 　　70~75%達成<br>
                                        3 　　76~85%達成<br>
                                        4 　　86~95%達成<br>
                                        5 　　96~99%達成<br>
                                        6 　　100%達成<br>
                                        </p>
                                    </b-col>
                                </b-row>
                            </b-container>
                    </b-card>
            </div>
            <div class="buttons">
                <b-button variant="success" ><div class="backbutton"><a href="/aimtemplatelist">戻る</a></div></b-button>
                <b-button variant="primary">編集</b-button>
                <b-button variant="danger">削除</b-button>
            </div>
        </article>
</template>

<script>
  export default {
    name: 'aimtemplate-list',
  }
</script>

<style>
section {
   display: flex;
   flex-direction: column;
   align-items: flex-start;
}
.title{
    font-family: 'Nunito Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    margin-top : 25px;
    padding:10px;
    font-size: 32px;
    color: #636363;
    line-height: 46px;
}
.item1{
    display: flex;
    justify-content: flex-start   
}
.templatename{
    margin-right: 10px;
}

h2{
    font-family: 'Nunito Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    color: #636363;
    font-size: 20px;
    margin-left: 10px;
    margin-right: 25px;
    font-weight: bold;
}
.item3{
    display: flex;
    justify-content: flex-start
}
.item-name2{
    margin-left: 500px;
    text-align: center;
}

.amount{
    margin-left: 10px;
    font-family: 'Nunito Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    background: #fcfcfa;
    padding: 0 30px;
    border-radius: 5px;
    border: solid 1px;
    border-color: #c2c2c7;
}

.sheetlist-table {
    margin: 10px 0 15px;
    padding: 10px;
}
.buttons{
    display: flex;
    justify-content: center;
}
.buttons a{
    color: #fff;
}
.buttons a:hover{
    color: #fff;
}
</style>