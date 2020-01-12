$(document).ready(function(){
  /*---------------------------------------------
    フォームのタブを表示
  ---------------------------------------------*/
  
  $('#form-tabs').each(function(){
    //変数の定義
    var $radioBox = $(this).find('.radio-box'),
      $options = $radioBox.find('p'),
      $formPanels = $(this).find('.form-panel');

      //ラジオボタンとラベルがクリックされたらイベント発火
      $radioBox.on('click','p', function(e){
        e.preventDefault();
      
        //クリックされたpタグをjQueryオブジェクト化
        var $this = $(this);
        
        //もしすでにチェックされている項目なら何もせず処理を中止
        if($this.find('input').prop('checked')){
          return;
        };

        //全ての項目の選択状態を一旦解除
        //クリックされた項目を選択状態に
        $options.find('input').prop('checked', false);
        $this.find('input').prop('checked', true);

        //全てのパネルを一旦非表示にし
        //クリックされた項目に対応するパネルを表示
        $formPanels.hide();
        $($this.find('a').attr('href')).show();
      });
  });
});
