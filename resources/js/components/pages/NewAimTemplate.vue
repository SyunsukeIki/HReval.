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
                    <input type="radio" id="one" value="action" v-model="picked" name="aimkinds1" class="radiobutton">
                    <label for="one">行動目標</label>
                    <input type="radio" id="two" value="amount" v-model="picked" name="aimkinds1" class="radiobutton">
                    <label for="two">数値目標</label>
                </div>
                <div class="item1">
                            <b-badge variant="info" ><span class="badge-size">分類名</span></b-badge>
                            <div class="input2">
                                <b-form-input v-model="text" placeholder="分類名を入力してください" class="input2"></b-form-input>
                            </div>
                            <b-badge variant="info" class="badge2"><span class="badge-size" >ウェイト</span></b-badge>
                            <div class="input3">
                                <b-form-input v-model="text" ></b-form-input>
                            </div>                           
                </div>
                <b-card class="mt-2">
                    <b-container class="bv-example-row">
                            <b-badge variant="info" ><span class="badge-size">項目名</span></b-badge>
                            <div class="input2">
                                <b-form-input v-model="text" placeholder="項目名を入力してください" class="input2"></b-form-input>
                            </div>
                            <b-badge variant="info"><span class="badge-size" >詳細</span></b-badge>
                            <div>
                                <b-form-textarea
                                id="textarea"
                                v-model="text"
                                placeholder="詳細を入力してください"
                                rows="3"
                                max-rows="6"
                                ></b-form-textarea>

                                <pre class="mt-3 mb-0">{{ text }}</pre>
                            </div>
                            <div class="deletebutton"><b-button>項目削除</b-button></div>                      
                    </b-container>
                </b-card>
                <b-card class="mt-2">
                    <b-container class="bv-example-row">
                            <b-badge variant="info" ><span class="badge-size">項目名</span></b-badge>
                            <div class="input2">
                                <b-form-input v-model="text" placeholder="項目名を入力してください" class="input2"></b-form-input>
                            </div>
                            <b-badge variant="info"><span class="badge-size" >詳細</span></b-badge>
                            <div>
                                <b-form-textarea
                                id="textarea"
                                v-model="text"
                                placeholder="詳細を入力してください"
                                rows="3"
                                max-rows="6"
                                ></b-form-textarea>

                                <pre class="mt-3 mb-0">{{ text }}</pre>
                            </div>
                            <div class="deletebutton" ><b-button>項目削除</b-button></div>                      
                    </b-container>
                </b-card>
                <div class="newbutton"><b-button variant="primary">項目追加</b-button></div>
            </div>
            <div class="sec-content">
                <div class="top">
                    <h4 class="sub-heading">目標種別</h4>
                    <input type="radio" id="one" value="action" v-model="picked" name="aimkinds2" class="radiobutton">
                    <label for="one">行動目標</label>
                    <input type="radio" id="two" value="amount" v-model="picked" name="aimkinds2" class="radiobutton">
                    <label for="two">数値目標</label>
                </div>
                <div class="item1">
                            <b-badge variant="info" ><span class="badge-size">分類名</span></b-badge>
                            <div class="input2">
                                <b-form-input v-model="text" placeholder="分類名を入力してください" class="input2"></b-form-input>
                            </div>
                            <b-badge variant="info" class="badge2"><span class="badge-size" >ウェイト</span></b-badge>
                            <div class="input3">
                                <b-form-input v-model="text" ></b-form-input>
                            </div>                           
                </div>
                <b-card class="mt-2">
                    <b-container class="bv-example-row">
                            <b-badge variant="info" ><span class="badge-size">項目名</span></b-badge>
                            <div class="input2">
                                <b-form-input v-model="text" placeholder="項目名を入力してください" class="input2"></b-form-input>
                            </div>
                            <b-badge variant="info"><span class="badge-size" >詳細</span></b-badge>
                            <div>
                                <b-form-textarea
                                id="textarea"
                                v-model="text"
                                placeholder="詳細を入力してください"
                                rows="3"
                                max-rows="6"
                                ></b-form-textarea>

                                <pre class="mt-3 mb-0">{{ text }}</pre>
                            </div>
                            <div class="deletebutton"><b-button>項目削除</b-button></div>                      
                    </b-container>
                </b-card>
                <div class="newbutton"><b-button variant="primary">項目追加</b-button></div>
            </div>
            <b-button variant="primary">保存</b-button>
        </article>
</template>

<script>
  export default {
    name: 'new-aimtemplate',

  }
</script>

<style>
article{
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-bottom: 50px;
}
.top{
   display: flex;
   justify-content: flex-start;
   margin-top:10px;
}
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

.badge{
    height: 35px;
    font-size: 18px;
}

.badge2{
    margin-left: 60px;
}

.item2{
    display: flex;
    flex-direction: column;
}
.deletebutton{
    float: right;
}
.newbutton{
    margin-top: 10px;
    margin-left: 930px;
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