**WP移行手順**

*使うプラグイン*  
*◆All-In-One WP Migration*

*移行データ*  
localhost-20201010-125858-5sv60l.zip

*=====手順=====*  
zipファイルを解凍してください。
解凍後↓
localhost-20201010-125858-5sv60l.wpress

*◆管理画面からプラグインをインストール(下の画像参照)、有効化する*  

![代替テキスト](./assets/img/All_IN_ONE_WP_MIGRATION.PNG "AllInOneWPMigration")

*◆All-In-One WP MigrationのImportを開く。  

![代替テキスト](./assets/img/プラグイン移動.PNG "AllInOneWPMigration")

![代替テキスト](./assets/img/INPORT.PNG "AllInOneWPMigration")

*◆対象のファイルをドラッグして選択、インポート実行*  
※ファイルのアップロードサイズ上限が小さい場合、以下コードを.htaccessに挿入*  
`php_value upload_max_filesize 50M`  
`php_value post_max_size 50M`  
`php_value max_input_time 300`  
`php_value max_execution_time 300`  