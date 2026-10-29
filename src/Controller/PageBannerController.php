<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Collection\Collection;
use Cake\Event\Event;
use Cake\Controller\Component\FlashComponent;
use Cake\Network\Session;
use Cake\Mailer\Email;
use Cake\Mailer\MailerAwareTrait;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * PageBanner Controller
 *
 * @property \App\Model\Table\PageBannerTable $PageBanner
 *
 * @method \App\Model\Entity\PageBanner[] paginate($object = null, array $settings = [])
 */
class PageBannerController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public $pages = array(
        1 => "Home Page",
        2 => "Beat hub",
        3 => "Mixing and Mastering Hub",
        4 => "Artiste Hub",
        5 => "Video Director Hub",
        6 => "Songwriters Hub",
    );

    public function index() {
        $query = $this->PageBanner->find()->where(['status' => 1]);
        $pageBanner = $this->paginate($query);
        $pages = $this->pages;
        $this->set(compact('pageBanner', 'pages'));
        $this->set('_serialize', ['pageBanner']);
    }

    /**
     * View method
     *
     * @param string|null $id Page Banner id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $pageBanner = $this->PageBanner->get($id, [
            'contain' => []
        ]);

        $this->set('pageBanner', $pageBanner);
        $this->set('_serialize', ['pageBanner']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $pages = $this->pages;
        $pageBanner = $this->PageBanner->newEntity();
        if ($this->request->is('post')) {
            $pageBanner = $this->PageBanner->patchEntity($pageBanner, $this->request->getData());
var_dump($pageBanner);exit();
            $model = $this->PageBanner->save($pageBanner);

            if ($model) {
                if ($model->page != 1) {
                    $currentId = $model->id;

                    $articles = TableRegistry::get('PageBanner');


                    $query = $articles->query();
                    $query->update()
                            ->set(['status' => 0])
                            ->where(['id !=' => $currentId, 'page' => $model->page])
                            ->execute();
                }
                $this->Flash->success(__('The page banner has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The page banner could not be saved. Please, try again.'));
        }
        $this->set(compact('pageBanner', 'pages'));
        $this->set('_serialize', ['pageBanner']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Page Banner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $pages = $this->pages;
        $pageBanner = $this->PageBanner->get($id, [
            'contain' => []
        ]);
        //print_r($this->request->getData());

        if ($this->request->is(['patch', 'post', 'put'])) {
            $pageBanner = $this->PageBanner->patchEntity($pageBanner, $this->request->getData());

            if ($this->PageBanner->save($pageBanner)) {
                $this->Flash->success(__('The page banner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The page banner could not be saved. Please, try again.'));
        }
        $this->set(compact('pageBanner', 'pages'));
        $this->set('_serialize', ['pageBanner']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Page Banner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $pageBanner = $this->PageBanner->get($id);
        if ($this->PageBanner->delete($pageBanner)) {
            $this->Flash->success(__('The page banner has been deleted.'));
        } else {
            $this->Flash->error(__('The page banner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function youtube(){ 
        $this->loadModel('HomeYoutubeVideo');
        $pageBanner = $this->HomeYoutubeVideo->get(1);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pageBanner = $this->HomeYoutubeVideo->patchEntity($pageBanner, $this->request->getData());

            if ($this->HomeYoutubeVideo->save($pageBanner)) {
                $this->Flash->success(__('Video Link has been saved.'));

                return $this->redirect(['action' => 'youtube']);
            }
            $this->Flash->error(__('Video Link could not be saved. Please, try again.'));
        }
        $this->set(compact('pageBanner'));
        $this->set('_serialize', ['pageBanner']);
    }

}
