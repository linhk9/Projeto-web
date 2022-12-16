<?php
    namespace console\controllers;

    use Yii;
    use yii\console\Controller;

    class RbacController extends Controller
    {
        public function actionInit()
        {
            $auth = Yii::$app->authManager;
			$auth->removeAll();

            $gerirUser = $auth->createPermission('gerirUser');
            $gerirUser->description = 'Gerir User';
            $auth->add($gerirUser);

            $verUser = $auth->createPermission('verUser');
            $verUser->description = 'Ver User';
            $auth->add($verUser);

            $criarUser = $auth->createPermission('criarUser');
            $criarUser->description = 'Criar User';
            $auth->add($criarUser);

            $alterarUser = $auth->createPermission('alterarUser');
            $alterarUser->description = 'Atualizar User';
            $auth->add($alterarUser);

            $apagarUser = $auth->createPermission('apagarUser');
            $apagarUser->description = 'Apagar User';
            $auth->add($apagarUser);

            $gerirSubscricao = $auth->createPermission('gerirSubscricao');
            $gerirSubscricao->description = 'Gerir Subscricao';
            $auth->add($gerirSubscricao);

            $verSubscricao = $auth->createPermission('verSubscricao');
            $verSubscricao->description = 'Ver Subscricao';
            $auth->add($verSubscricao);

            $criarSubscricao = $auth->createPermission('criarSubscricao');
            $criarSubscricao->description = 'Criar Subscricao';
            $auth->add($criarSubscricao);

            $alterarSubscricao = $auth->createPermission('alterarSubscricao');
            $alterarSubscricao->description = 'Alterar Subscricao';
            $auth->add($alterarSubscricao);

            $apagarSubscricao = $auth->createPermission('apagarSubscricao');
            $apagarSubscricao->description = 'Apagar Subscricao';
            $auth->add($apagarSubscricao);

            $verProduto = $auth->createPermission('verProduto');
            $verProduto->description = 'Ver Produto';
            $auth->add($verProduto);

            $gerirProduto = $auth->createPermission('gerirProduto');
            $gerirProduto->description = 'Gerir Produto';
            $auth->add($gerirProduto);

            $criarProduto = $auth->createPermission('criarProduto');
            $criarProduto->description = 'Criar Produto';
            $auth->add($criarProduto);

            $alterarProduto = $auth->createPermission('alterarProduto');
            $alterarProduto->description = 'Alterar Produto';
            $auth->add($alterarProduto);

            $apagarProduto = $auth->createPermission('apagarProduto');
            $apagarProduto->description = 'Apagar Produto';
            $auth->add($apagarProduto);

            $gerirEspacoVerde = $auth->createPermission('gerirEspacoVerde');
            $gerirEspacoVerde->description = 'Gerir Espaço Verde';
            $auth->add($gerirEspacoVerde);

            $verEspacoVerde = $auth->createPermission('verEspacoVerde');
            $verEspacoVerde->description = 'Ver Espaço Verde';
            $auth->add($verEspacoVerde);

            $criarEspacoVerde = $auth->createPermission('criarEspacoVerde');
            $criarEspacoVerde->description = 'Criar Espaço Verde';
            $auth->add($criarEspacoVerde);

            $alterarEspacoVerde = $auth->createPermission('alterarEspacoVerde');
            $alterarEspacoVerde->description = 'Alterar Espaço Verde';
            $auth->add($alterarEspacoVerde);

            $apagarEspacoVerde = $auth->createPermission('apagarEspacoVerde');
            $apagarEspacoVerde->description = 'Apagar Espaço Verde';
            $auth->add($apagarEspacoVerde);
			
            $verPlanoTreino = $auth->createPermission('verPlanoTreino');
            $verPlanoTreino->description = 'Ver Plano de Treino';
            $auth->add($verPlanoTreino);

            $gerirPlanoTreino = $auth->createPermission('gerirPlanoTreino');
            $gerirPlanoTreino->description = 'Gerir Plano de Treino';
            $auth->add($gerirPlanoTreino);

            $criarPlanoTreino = $auth->createPermission('criarPlanoTreino');
            $criarPlanoTreino->description = 'Criar Plano de Treino';
            $auth->add($criarPlanoTreino);

            $alterarPlanoTreino = $auth->createPermission('alterarPlanoTreino');
            $alterarPlanoTreino->description = 'Alterar Plano de Treino';
            $auth->add($alterarPlanoTreino);

            $apagarPlanoTreino = $auth->createPermission('apagarPlanoTreino');
            $apagarPlanoTreino->description = 'Apagar Plano de Treino';
            $auth->add($apagarPlanoTreino);
			
            $verQRCode = $auth->createPermission('verQRCode');
            $verQRCode->description = 'Ver QRCode';
            $auth->add($verQRCode);

            $gerirQRCode = $auth->createPermission('gerirQRCode');
            $gerirQRCode->description = 'Gerir QRCode';
            $auth->add($gerirQRCode);

            $criarQRCode = $auth->createPermission('criarQRCode');
            $criarQRCode->description = 'Criar QRCode';
            $auth->add($criarQRCode);

            $alterarQRCode = $auth->createPermission('alterarQRCode');
            $alterarQRCode->description = 'Alterar QRCode';
            $auth->add($alterarQRCode);

            $apagarQRCode = $auth->createPermission('apagarQRCode');
            $apagarQRCode->description = 'Apagar QRCode';
            $auth->add($apagarQRCode);
			
            $verInfoTreino = $auth->createPermission('verInfoTreino');
            $verInfoTreino->description = 'Ver Informação de Treino';
            $auth->add($verInfoTreino);

            $gerirInfoTreino = $auth->createPermission('gerirInfoTreino');
            $gerirInfoTreino->description = 'Gerir Informação de Treino';
            $auth->add($gerirInfoTreino);

            $criarInfoTreino = $auth->createPermission('criarInfoTreino');
            $criarInfoTreino->description = 'Criar Informação de Treino';
            $auth->add($criarInfoTreino);

            $alterarInfoTreino = $auth->createPermission('alterarInfoTreino');
            $alterarInfoTreino->description = 'Alterar Informação de Treino';
            $auth->add($alterarInfoTreino);

            $apagarInfoTreino = $auth->createPermission('apagarInfoTreino');
            $apagarInfoTreino->description = 'Apagar Informação de Treino';
            $auth->add($apagarInfoTreino);

            $comprarSubscricao = $auth->createPermission('comprarSubscricao');
            $comprarSubscricao->description = 'Comprar Subscricao';
            $auth->add($comprarSubscricao);

			$cliente = $auth->createRole('cliente');
			$auth->add($cliente);

            $staff = $auth->createRole('staff');
            $auth->add($staff);

            $auth->addChild($staff, $gerirProduto);
            $auth->addChild($staff, $verProduto);
            $auth->addChild($staff, $criarProduto);
            $auth->addChild($staff, $alterarProduto);
            $auth->addChild($staff, $apagarProduto);

            $auth->addChild($staff, $gerirPlanoTreino);
            $auth->addChild($staff, $verPlanoTreino);
            $auth->addChild($staff, $criarPlanoTreino);
            $auth->addChild($staff, $alterarPlanoTreino);
            $auth->addChild($staff, $apagarPlanoTreino);

            $admin = $auth->createRole('admin');
            $auth->add($admin);

            $auth->addChild($admin, $gerirEspacoVerde);
            $auth->addChild($admin, $verEspacoVerde);
            $auth->addChild($admin, $criarEspacoVerde);
            $auth->addChild($admin, $alterarEspacoVerde);
            $auth->addChild($admin, $apagarEspacoVerde);

            $auth->addChild($admin, $gerirInfoTreino);
            $auth->addChild($admin, $verInfoTreino);
            $auth->addChild($admin, $criarInfoTreino);
            $auth->addChild($admin, $alterarInfoTreino);
            $auth->addChild($admin, $apagarInfoTreino);

            $auth->addChild($admin, $gerirQRCode);
            $auth->addChild($admin, $verQRCode);
            $auth->addChild($admin, $criarQRCode);
            $auth->addChild($admin, $alterarQRCode);
            $auth->addChild($admin, $apagarQRCode);

            $auth->addChild($admin, $gerirSubscricao);
            $auth->addChild($admin, $verSubscricao);
            $auth->addChild($admin, $apagarSubscricao);
            $auth->addChild($admin, $alterarSubscricao);
            $auth->addChild($admin, $criarSubscricao);

            $auth->addChild($staff, $gerirUser);
            $auth->addChild($staff, $verUser);
            $auth->addChild($admin, $criarUser);
            $auth->addChild($staff, $alterarUser);
            $auth->addChild($admin, $apagarUser);

            // cliente roles
            $auth->addChild($cliente, $comprarSubscricao);

            $auth->addChild($admin, $staff);
			
            $auth->assign($admin, 2);
        }
    }