var app = angular.module('Produit', []);

app.controller('produitController', ['$scope', function ($scope) {
//        $scope.src_img= 'assets/lib/images/image1.jpg';
//        $scope.titre_produit = 'HTML et Javascript';
//        $scope.desc_produit = 'LE livre sur le HTML et le Javascript';
//        $scope.prix_produits = 'promo actuellement';
        $scope.produits = [
            {
                src_img: 'assets/lib/images/image1.jpg',
                titre_produit: 'HTML et Javascript',
                desc_produit: 'LE livre sur le HTML et le Javascript',
                prix_produits: '19.90'
            },
            {
                src_img: 'assets/lib/images/image2.jpg',
                titre_produit: 'PHP, MySQL, Javascript et HTML',
                desc_produit: 'Le livre ultime pour tout web developpeur',
                prix_produits: '39.90'
            }
        ];
    }]);

