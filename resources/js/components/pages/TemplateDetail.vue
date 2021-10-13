<template>
    <article>
        <h1 class="title">目標シートテンプレート<br>詳細</h1>
        <div class="eval-sheet-content">           
            <section>
                <h4 class="sub-heading"><b-badge variant="info"><span>テンプレート名</span></b-badge><span class="label-text">一般社員_2020</span></h4>
                <b-col cols="4"><b-badge variant="info"><span>目標種別</span></b-badge><span class="label-text">行動目標</span></b-col>
                <hr>
                <b-container class="bv-example-row">
                    <b-row align-h="start">
                        <b-col cols="5"><b-badge variant="info"><span class="item1">分類</span></b-badge><span class="label-text">リーダーに求めるもの</span></b-col>
                        <b-col cols="4"><b-badge variant="info"><span>ウエイト</span></b-badge><span class="label-text">50</span></b-col>
                    </b-row>
                </b-container>
            </section>
            <hr>
            <div class="sec-content">
                <div class="item">
                    <b-row>
                        <b-col cols="15">
                            <b-badge variant="info" >
                            <span class="badge-size">項目名</span></b-badge><span class="label-text">リーダーが数字を把握しているのかどうか</span>
                        </b-col>  
                    </b-row>
                </div>       
                <b-card>
                    <b-badge variant="info" ><span class="badge-size">項目詳細</span></b-badge>
                    <p class="card-text">【4年目以降】後輩と現場に入る<br>【3年目】後輩の指導ができる<br>【2年目】後輩の面倒をみれる（相談相手になる）<br>【1年目】自分のことがきちんとできる（基本のルール）・社員としての基本 </p>
                </b-card>
            </div>
            <div class="sec-content">
                <div class="item">
                    <b-row>
                        <b-col cols="15">
                            <b-badge variant="info" >
                            <span class="badge-size">項目名</span></b-badge><span class="label-text">チームに貢献する</span>
                        </b-col>  
                    </b-row>  
                </div>     
                <b-card>
                    <b-badge variant="info" ><span class="badge-size">項目詳細</span></b-badge>
                    <p class="card-text">チームの人との仲を深める </p>
                </b-card>
            </div>
            <hr>
            <section>
                <b-col cols="5"><b-badge variant="info"><span>目標種別</span></b-badge><span class="label-text">数値目標</span></b-col>
                <hr>
                <b-container class="bv-example-row">
                    <b-row align-h="start">
                        <b-col cols="5"><b-badge variant="info"><span class="badge-size">分類</span></b-badge><span class="label-text">リーダーに求める数値目標</span></b-col>
                        <b-col cols="4"><b-badge variant="info"><span class="badge-size">ウエイト</span></b-badge><span class="label-text">50</span></b-col>
                    </b-row>
                </b-container>
            </section>
            <hr>
            <div class="sec-content">
                <div class="item">
                    <b-row>
                        <b-col cols="15">
                            <b-badge variant="info" >
                            <span class="badge-size">項目名</span></b-badge><span class="label-text">売上達成率</span>
                        </b-col>  
                    </b-row>       
                </div>
                <b-card>
                    <b-badge variant="info" ><span class="badge-size">項目詳細</span></b-badge>
                    <p class="card-text">自分自身を含めたチームの平均値で測定する </p>
                </b-card>
            </div>
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
