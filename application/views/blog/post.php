
<div class="post" ng-controller="PostController">  
   {{test}}
   <br>
   <p>
      {{data}}
   </p>

   <table>
      <tr>
         <th>id</th>
         <th>title</th>
         <th>content</th>
         <th>time</th>
      </tr>
      <tr ng-repeat="post in data">
         <td>
            {{post.id}}
         </td>
         <td>
            {{post.title}}
         </td>
         <td>
            {{post.content}}
         </td>
         <td>
            {{post.time}}
         </td>
      </tr>
   </table>

   <br>
   <input ng-model="inputValue">
   <span>{{inputValue}}</span>
   <button ng-click="alert(inputValue)">click to alert</button>

   <br>
   <p my-basic-template></p>
</div>