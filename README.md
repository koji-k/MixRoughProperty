**PHPで作成するクラスのプロパティを更に大雑把に扱えるようになるライブラリです。**

連想配列では存在しないキーへの代入は新しい値の追加になるように、そもそもPHPの変数自体が初めて使用された時点で宣言されるのと同じように、クラスのプロパティの宣言をしていなくても、そのインスタンスから存在しないプロパティ名へアクセスすると、あたかもそのプロパティが最初から存在していたかのように振る舞うようになります。
- - -

**使い方：**  
単純にMixRoughProperty.phpをextendsしてください。  
そのクラスのインスタンスでは、ソースで指定していないプロパティに対して値のセットと参照が出来るようになります。

**注意：**  
実際には配列へのアクセスになります。
そのため、publicなプロパティと同じ扱いになります。
