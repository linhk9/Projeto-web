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
			
            $criarUser = $auth->createPermission('criarUser');
            $criarUser->description = 'Criar User';
            $auth->add($criarUser);

            $alterarUser = $auth->createPermission('alterarUser');
            $alterarUser->description = 'Atualizar User';
            $auth->add($alterarUser);

            $apagarUser = $auth->createPermission('apagarUser');
            $apagarUser->description = 'Apagar User';
            $auth->add($apagarUser);

            $criarSubscricao = $auth->createPermission('criarSubscricao');
            $criarSubscricao->description = 'Criar Subscricao';
            $auth->add($criarSubscricao);

            $alterarSubscricao = $auth->createPermission('alterarSubscricao');
            $alterarSubscricao->description = 'Alterar Subscricao';
            $auth->add($alterarSubscricao);

            $apagarSubscricao = $auth->createPermission('apagarSubscricao');
            $apagarSubscricao->description = 'Apagar Subscricao';
            $auth->add($apagarSubscricao);

            $criarProduto = $auth->createPermission('criarProduto');
            $criarProduto->description = 'Criar Produto';
            $auth->add($criarProduto);

            $alterarProduto = $auth->createPermission('alterarProduto');
            $alterarProduto->description = 'Alterar Produto';
            $auth->add($alterarProduto);

            $apagarProduto = $auth->createPermission('apagarProduto');
            $apagarProduto->description = 'Apagar Produto';
            $auth->add($apagarProduto);

            $criarEspacoVerde = $auth->createPermission('criarEspacoVerde');
            $criarEspacoVerde->description = 'Criar Espaço Verde';
            $auth->add($criarEspacoVerde);

            $alterarEspacoVerde = $auth->createPermission('alterarEspacoVerde');
            $alterarEspacoVerde->description = 'Alterar Espaço Verde';
            $auth->add($alterarEspacoVerde);

            $apagarEspacoVerde = $auth->createPermission('apagarEspacoVerde');
            $apagarEspacoVerde->description = 'Apagar Espaço Verde';
            $auth->add($apagarEspacoVerde);
			
            $criarPlanoTreino = $auth->createPermission('criarPlanoTreino');
            $criarPlanoTreino->description = 'Criar Plano de Treino';
            $auth->add($criarPlanoTreino);

            $alterarPlanoTreino = $auth->createPermission('alterarPlanoTreino');
            $alterarPlanoTreino->description = 'Alterar Plano de Treino';
            $auth->add($alterarPlanoTreino);

            $apagarPlanoTreino = $auth->createPermission('apagarPlanoTreino');
            $apagarPlanoTreino->description = 'Apagar Plano de Treino';
            $auth->add($apagarPlanoTreino);
			
            $criarQRCode = $auth->createPermission('criarQRCode');
            $criarQRCode->description = 'Criar QRCode';
            $auth->add($criarQRCode);

            $alterarQRCode = $auth->createPermission('alterarQRCode');
            $alterarQRCode->description = 'Alterar QRCode';
            $auth->add($alterarQRCode);

            $apagarQRCode = $auth->createPermission('apagarQRCode');
            $apagarQRCode->description = 'Apagar QRCode';
            $auth->add($apagarQRCode);
			
            $criarInfoTreino = $auth->createPermission('criarInfoTreino');
            $criarInfoTreino->description = 'Criar Informação de Treino';
            $auth->add($criarInfoTreino);

            $alterarInfoTreino = $auth->createPermission('alterarInfoTreino');
            $alterarInfoTreino->description = 'Alterar Informação de Treino';
            $auth->add($alterarInfoTreino);

            $apagarInfoTreino = $auth->createPermission('apagarInfoTreino');
            $apagarInfoTreino->description = 'Apagar Informação de Treino';
            $auth->add($apagarInfoTreino);

            $staff = $auth->createRole('staff');
            $auth->add($staff);
						
            $auth->addChild($staff, $criarProduto);
            $auth->addChild($staff, $alterarProduto);
            $auth->addChild($staff, $apagarProduto);
			
            $auth->addChild($staff, $criarPlanoTreino);
            $auth->addChild($staff, $alterarPlanoTreino);
            $auth->addChild($staff, $apagarPlanoTreino);

            $admin = $auth->createRole('admin');
            $auth->add($admin);

            $auth->addChild($staff, $criarEspacoVerde);
            $auth->addChild($staff, $alterarEspacoVerde);
            $auth->addChild($staff, $apagarEspacoVerde);

            $auth->addChild($admin, $criarInfoTreino);
            $auth->addChild($admin, $alterarInfoTreino);
            $auth->addChild($admin, $apagarInfoTreino);
			
            $auth->addChild($admin, $criarQRCode);
            $auth->addChild($admin, $alterarQRCode);
            $auth->addChild($admin, $apagarQRCode);
			
            $auth->addChild($admin, $apagarSubscricao);
            $auth->addChild($admin, $alterarSubscricao);
            $auth->addChild($admin, $criarSubscricao);

            $auth->addChild($admin, $criarUser);
            $auth->addChild($staff, $alterarUser);
            $auth->addChild($admin, $apagarUser);

            $auth->addChild($admin, $staff);

            $auth->assign($staff, 2);
        }
    }