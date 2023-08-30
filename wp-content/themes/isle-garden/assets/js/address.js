// JS Information ======================================================
// Site URL:https://isle-garden.com/
// File name:address.js
// Summary:住所自動入力スクリプト
// Created:2023-03-06
//======================================================================

// 住所自動入力
jQuery( 'form #zip' ).keyup( function() {
  AjaxZip3.zip2addr( this, '', 'prefecture', 'address' );
});
