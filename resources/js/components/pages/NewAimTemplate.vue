<template>
        <article>
            <section>
                <h1 class="title">目標シートテンプレート<br>新規作成</h1>
                <h2>テンプレート名</h2>
                <div class="input1">
                    <b-form-input v-model="text" placeholder="テンプレート名を入力してください"></b-form-input>
                </div>
            </section>
            <div class="sec-content">
                <div class="top">
                    <h4 class="sub-heading">目標種別</h4>
                    <input type="radio" id="one" value="action" v-model="picked" name="aimkinds" class="radiobutton">
                    <label for="one">行動目標</label>
                    <input type="radio" id="two" value="amount" v-model="picked" name="aimkinds" class="radiobutton">
                    <label for="two">数値目標</label>
                </div>
                    <b-col>
                        <div class="item-name">
                            <b-badge variant="info" ><span class="badge-size">分類名</span></b-badge>
                            <div class="input2">
                                <b-form-input v-model="text" placeholder="分類名を入力してください" class="input2"></b-form-input>
                            </div>
                            <b-badge variant="info" class="badge2"><span class="badge-size" >ウェイト</span></b-badge>
                            <div class="input3">
                                <b-form-input v-model="text" ></b-form-input>
                            </div>                           
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
                        <div class="item-name">
                            <b-badge variant="info" class="mr-3"></b-badge>分類名　　　　社員に求める数値目標
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
            <div class="button">
                <b-button variant="primary">編集</b-button>
                <b-button variant="danger">削除</b-button>
            </div>
        </article>
</template>

<script>
  export default {
    name: 'new-aimtemplate',

  }
</script>

<style>
.input1{
    margin-left: 10px;
    width:80%;
}
.input2{
    margin :0 2px 3px 3px;
    width: 500px;
}
.input3{
    margin :0 2px 3px 3px;
    width: 100px;
}
.top{
   display: flex;
   justify-content: flex-start;
   margin-top:10px;
}
.badge{
    height: 35px;
    font-size: 18px;
}
.badge2{
    margin-left: 60px;
}

.radiobutton{
    width: 25px;
    height:25px;
    margin: 6px 5px 10px 30px;
    
}
label{
    margin-top: 6px;
}
section {
   display: flex;
   flex-direction: column;
   justify-content: flex-start;
}
.title{
    font-family: 'Nunito Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    margin-top : 25px;
    padding:10px;
    font-size: 32px;
    color: #636363;
    line-height: 46px;
}

h2{
    font-family: 'Nunito Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    color: #636363;
    font-size: 20px;
    margin-left: 10px;
    font-weight: bold;
}
.item-name{
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
.button{
    display: flex;
    justify-content: center;
}
    
</style>