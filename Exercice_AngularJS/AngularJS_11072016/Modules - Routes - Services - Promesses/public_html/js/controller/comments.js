//APP CONTROLLER COMMENTS
app.controller('CommentsCtrl', function ($scope, PostFactory, $routeParams) {
    //CHARGEMENT DES COMMENTAIRES
    $scope.loading = true;
    $scope.newComment = {};
    // RECUPERATION DES ARTICLES
    var post = PostFactory.getPost($routeParams.id).then(function (post) {
        $scope.loading = false;
        $scope.title = post.name;
        $scope.comments = post.comments;
    }, function (msg) {
        alert(msg);
    });
    //AJOUTER DES COMMENTAIRES
    $scope.addComment = function(){
        $scope.comments.push($scope.newComment);
        $scope.newComment = {};
    };
});
