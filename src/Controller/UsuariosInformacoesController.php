<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * UsuariosInformacoes Controller
 *
 * @property \App\Model\Table\UsuariosInformacoesTable $UsuariosInformacoes
 * @method \App\Model\Entity\UsuariosInformaco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsuariosInformacoesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $usuariosInformacoes = $this->paginate($this->UsuariosInformacoes);

        $this->set(compact('usuariosInformacoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Usuarios Informaco id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuariosInformaco = $this->UsuariosInformacoes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('usuariosInformaco'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuariosInformaco = $this->UsuariosInformacoes->newEmptyEntity();
        if ($this->request->is('post')) {
            $usuariosInformaco = $this->UsuariosInformacoes->patchEntity($usuariosInformaco, $this->request->getData());
            if ($this->UsuariosInformacoes->save($usuariosInformaco)) {
                $this->Flash->success(__('The usuarios informaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuarios informaco could not be saved. Please, try again.'));
        }
        $this->set(compact('usuariosInformaco'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuarios Informaco id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuariosInformaco = $this->UsuariosInformacoes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuariosInformaco = $this->UsuariosInformacoes->patchEntity($usuariosInformaco, $this->request->getData());
            if ($this->UsuariosInformacoes->save($usuariosInformaco)) {
                $this->Flash->success(__('The usuarios informaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuarios informaco could not be saved. Please, try again.'));
        }
        $this->set(compact('usuariosInformaco'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuarios Informaco id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuariosInformaco = $this->UsuariosInformacoes->get($id);
        if ($this->UsuariosInformacoes->delete($usuariosInformaco)) {
            $this->Flash->success(__('The usuarios informaco has been deleted.'));
        } else {
            $this->Flash->error(__('The usuarios informaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
