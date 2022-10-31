<?php
    namespace app\commands;

    use Yii;
    use yii\console\Controller;

    class RbacController extends Controller
    {
        public function actionInit()
        {
            $auth = Yii::$app->authManager;

            $createUser = $auth->createPermission('createUser');
            $createUser->description = 'Criar User';
            $auth->add($createUser);

            $updateUser = $auth->createPermission('updateUser');
            $updateUser->description = 'Atualizar User';
            $auth->add($updateUser);

            $deleteUser = $auth->createPermission('deleteUser');
            $deleteUser->description = 'Apagar User';
            $auth->add($deleteUser);

            $criarSubscricao = $auth->createPermission('criarSubscricao');
            $criarSubscricao->description = 'Criar Subscricao';
            $auth->add($criarSubscricao);

            $alterarSubscricao = $auth->createPermission('alterarSubscricao');
            $alterarSubscricao->description = 'Alterar Subscricao';
            $auth->add($alterarSubscricao);
            $auth->add($criarSubscricao);

            $apagarSubscricao = $auth->createPermission('apagarSubscricao');
            $apagarSubscricao->description = 'Apagar Subscricao';
            $auth->add($apagarSubscricao);

            $staff = $auth->createRole('staff');
            $auth->add($staff);
            $auth->addChild($staff, $updateUser);

            $admin = $auth->createRole('admin');
            $auth->add($admin);

            $auth->addChild($admin, $apagarSubscricao);
            $auth->addChild($admin, $alterarSubscricao);
            $auth->addChild($admin, $criarSubscricao);

            $auth->addChild($admin, $createUser);
            $auth->addChild($admin, $deleteUser);
            $auth->addChild($admin, $staff);

            $auth->assign($staff, 2);
        }
    }