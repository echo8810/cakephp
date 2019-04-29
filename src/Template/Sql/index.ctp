<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <h1>実行結果</h1>
    <table style="border:1px; width:400px;">
      <tr>
        <th>id</th>
        <th>name</th>
        <th>hello_text</th>
        <th>face_picture</th>
        <th>background_picture</th>
        <th>activated_code</th>
        <th>activated_status</th>
        <th>password</th>
        <th>password_confirmation</th>
        <th>CREATED_TIME</th>
        <th>UPDATED_TIME</th>
      </tr>
    <?php
        print '';
        foreach($data as $element){
            print "<tr><td>{$element['id']}</td>
                   <td>{$element['name']}</td>
                   <td>{$element['hello_text']}</td>
                   <td>{$element['face_picture']}</td>
                   <td>{$element['background_picture']}</td>
                   <td>{$element['activated_code']}</td>
                   <td>{$element['activated_status']}</td>
                   <td>{$element['password']}</td>
                   <td>{$element['password_confirmation']}</td>
                   <td>{$element['CREATED_TIME']}</td>
                   <td>{$element['UPDATED_TIME']}</td></tr>\nR
                   ";
        }
    ?>
    </table>
  </body>
</html>
