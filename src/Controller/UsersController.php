<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\View\Helper\BreadcrumbsHelper;
use Cake\Mailer\Email;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    public function beforeFilter(Event $event){

        $this->Auth->allow(['add']);
        $this->loadModel('Ages');        

        $age = $this->Ages->find('list', ['limit' => 200]);
        $children = $this->Users->Children->find('list', ['limit' => 200]);
        $heights = $this->Users->Heights->find('list', ['limit' => 200]);
        $weights = $this->Users->Weights->find('list', ['limit' => 200]);
        $mamaGotras = $this->Users->MamaGotras->find('list', ['limit' => 200]);
        $incomes = $this->Users->Incomes->find('list', ['limit' => 200]);
        $cities = $this->Users->Cities->find('list', ['limit' => 200]);
        $communities = $this->Users->Communities->find('list', ['limit' => 200]);
        $countries = $this->Users->Countries->find('list', ['limit' => 200]);
        $educations = $this->Users->Educations->find('list', ['limit' => 200]);
        $gotras = $this->Users->Gotras->find('list', ['limit' => 200]);
        $occupations = $this->Users->Occupations->find('list', ['limit' => 200]);
        $professions = $this->Users->Professions->find('list', ['limit' => 200]);
        $states = $this->Users->States->find('list', ['limit' => 200]);
        $this->set(compact('userData', 'age', 'children', 'heights', 'weights', 'mamaGotras', 'incomes', 'cities', 'communities', 'countries', 'educations', 'gotras', 'occupations', 'professions', 'states'));
    }

    /**
     * login method
     */
    public function login() {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            return $this->Flash->error(__('Invalid username or password.'));
        }
    }

    /**
     * logout method
     */
    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $defaultCondition = [];
        if (!empty($this->request->data)) {
            $data = $this->request->data;
            //debug($data);
            $defaultCondition = [
                'AND' => [
                    'Users.first_name' => $data['name'],
                    'Users.age' => $data['age'],
                    'Users.height_id' => $data['height'],
                    'Users.gender' => $data['gender']
                ]
            ];

        }
        $this->paginate = [
            'contain' => ['Communities', 'Children', 'Heights', 'Weights', 'MamaGotras', 'Incomes'],
            'conditions' => $defaultCondition
        ];
        //debug($this->paginate);exit;
        $users = $this->paginate($this->Users);
        //debug($users);
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Children', 'Heights', 'Weights', 'MamaGotras', 'Incomes', 'Communities', 'Gotras', 'Educations', 'Professions', 'Occupations', 'Cities', 'Countries', 'States', 'Likes']
        ]);
        //debug($user);exit;
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $requestData = $this->request->data;
            $requestData = $this->getData($requestData);
            //debug($requestData);exit;
            $user = $this->Users->patchEntity($user, $requestData);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Communities', 'Gotras', 'Educations', 'Professions', 'Occupations', 'Cities', 'Countries', 'States']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $requestData = $this->request->data;
            $requestData = $this->getData($requestData);
            //debug($requestData);exit;

            $user = $this->Users->patchEntity($user, $requestData);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * get data method
     *
     */
    public function getData($requestData) {
        
        $requestData['community_name'] = $this->Users->Communities->find('list', ['conditions' => ['Communities.id' => $requestData['community_id']]])->first();
        $requestData['gotra_name'] = $this->Users->Gotras->find('list', ['conditions' => ['Gotras.id' => $requestData['gotra_id']]])->first();
        $requestData['education_name'] = $this->Users->Educations->find('list', ['conditions' => ['Educations.id' => $requestData['education_id']]])->first();
        $requestData['profession_name'] = $this->Users->Professions->find('list', ['conditions' => ['Professions.id' => $requestData['profession_id']]])->first();
        $requestData['occupation_name'] = $this->Users->Occupations->find('list', ['conditions' => ['Occupations.id' => $requestData['occupation_id']]])->first();
        $requestData['ccity_name'] = $this->Users->Cities->find('list', ['conditions' => ['Cities.id' => $requestData['correspondence_city']]])->first();
        $requestData['pcity_name'] = $this->Users->Cities->find('list', ['conditions' => ['Cities.id' => $requestData['permanent_city']]])->first();

        $requestData['partner_community'] = implode(',', $requestData['communities']['_ids']);
        $requestData['partner_education'] = implode(',', $requestData['educations']['_ids']);
        $requestData['partner_occupations'] = implode(',', $requestData['occupations']['_ids']);
        $requestData['partner_profession'] = implode(',', $requestData['professions']['_ids']);
        $requestData['partner_city'] = implode(',', $requestData['cities']['_ids']);
        $requestData['partner_state'] = implode(',', $requestData['states']['_ids']);
        $requestData['partner_country'] = implode(',', $requestData['countries']['_ids']);
        if ($requestData['gender'] == 'Male') {
            $requestData['partner_gender'] = 'Female';
        } else if ($requestData['gender'] == 'Female') {
            $requestData['partner_gender'] = 'Male';
        }

        return $requestData;
    }

    /**
     * matches method
     *
     * @return \Cake\Network\Response|null
     */
    public function matches()
    {
        $userData      = $this->Users->get($this->Auth->User('id'));
        $favouriteList = $userData['favourite'];
        $interestSentList = $userData['interest_sent'];
        $userId        = $userData['id'];
        $minAge        = $userData['partner_min_age'];
        $maxAge        = $userData['partner_max_age'];
        $minHeight     = $userData['partner_min_height'];
        $maxHeight     = $userData['partner_max_height'];
        $educations    = $userData['partner_education'];
        $professions   = $userData['partner_profession'];
        $occupations   = $userData['partner_occupations'];
        $communities   = $userData['partner_community'];
        $gender        = $userData['partner_gender'];
        $countries     = $userData['partner_country'];
        $states        = $userData['partner_state'];
        $cities        = $userData['partner_city'];    

        $this->paginate = [
            'contain' => ['Communities', 'Children', 'Heights', 'Weights', 'MamaGotras', 'Incomes', 'Likes'],
            'conditions' => [
                'AND' => [
                    "Users.id != $userId",
                    "Users.age BETWEEN $minAge AND $maxAge",
                    "Users.height_id BETWEEN $minHeight AND $maxHeight",
                    "Users.education_id IN ($educations)",
                    "Users.profession_id IN ($professions)",
                    "Users.occupation_id IN ($occupations)",
                    "Users.community_id IN ($communities)",
                    "Users.correspondence_country IN ($countries)",
                    "Users.correspondence_state IN ($states)",
                    "Users.correspondence_city IN ($cities)",
                    'Users.gender' => $gender
                ]
            ],
            'order' => [
                'Users.id' => 'DESC'
            ]
        ];
        //debug($this->paginate);
        $users = $this->paginate($this->Users);

        $likes = $this->Users->Likes->find()->where(['Likes.user_id' => $userId])->all();
        $likeUsers = [];
        foreach ($likes as $key => $value) {
            $likeUsers[] = $value['like_id'];
        }
        //debug($likeUsers);

        $intSent = $this->Users->Interests->find()->where(['Interests.user_id' => $userId])->all();
        $intSentUsers = [];
        foreach ($intSent as $key => $value) {
            $intSentUsers[] = $value['int_id'];
        }
        //debug($intSentUsers);exit;


        $this->set(compact('users', 'likeUsers', 'intSentUsers', 'favouriteList', 'interestSentList'));
        $this->set('_serialize', ['users']);
    }

    /**
     * Like method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function like($lid = null)
    {
        // $likes = $this->Users->Likes->find()->all();
        // debug($likes);exit;
        // $user = $this->Users->get($this->Auth->User('id'));
        // if (!empty($user['favourite'])) {
        //     $favouriteList[] = $user['favourite'];
        //     $favouriteId[] = $lid;
        //     $favouriteList = array_merge($favouriteList, $favouriteId);
        //     $user['favourite'] = implode(',', $favouriteList);
        // }else{
        //     $favouriteList[] = $user['favourite'] = $lid;
        //     $user['favourite'] = implode(',', $favouriteList);
        // }
        // //debug($user['favourite']);
        // if (!empty($user)) {
        //     $this->Users->save($user);
        //     $this->Flash->success(__('The user has been added to favourite list.'));
        // } else {
        //     $this->Flash->error(__('The user could not be add. Please, try again.'));
        // }

        // return $this->redirect(['action' => 'matches']);

            $data['like_id'] = $lid;
            $data['user_id'] = $this->Auth->User('id');
            $like = $this->Users->Likes->newEntity();
            $like = $this->Users->Likes->patchEntity($like, $data);
            if ($this->Users->Likes->save($like)) {
                $this->Flash->success('Done');
            }else{
                $this->Flash->error('Failed');
            }

            return $this->redirect($this->referer());


    }

    /**
     * Dislike method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function dislike($dlid = null)
    {
        debug($dlid);
        //$user = $this->Users->get($this->Auth->User('id'));
        $user = $this->Users->Likes->find()->where([
            'AND' => [
                'Likes.user_id' => $this->Auth->User('id'),
                'Likes.like_id' => $dlid
            ]
        ])->first();
        //debug($user);exit;

        // if (!empty($user['favourite'])) {
        //     $favouriteList = explode(',', $user['favourite']);
        //     $favouriteId[] = $dlid;
        //     $favouriteList = array_diff($favouriteList, $favouriteId);
        //     $user['favourite'] = implode(',', $favouriteList);
        // }
        //debug($user['favourite']);

        if (!empty($user)) {
            $this->Users->Likes->delete($user);
            $this->Flash->success(__('The user has been dislike.'));
        } else {
            $this->Flash->error(__('The user could not be add. Please, try again.'));
        }

        return $this->redirect(['action' => 'matches']);
    }

    /**
     * favourite method
     *
     * @return \Cake\Network\Response|null
     */
    public function favourite()
    {
        //debug($this->Auth->User('partner_education'));
        $userData = $this->Users->get($this->Auth->User('id'));
        // $favouriteList = $userData['favourite'];
        // debug($favouriteList);exit;
        $userId = $userData['id'];
        
        $favouriteList = $this->Users->Likes->find()->select('Likes.like_id')->where(['Likes.user_id' => $userId])->all();
        $favouriteListValue = [];
        foreach ($favouriteList as $key => $value) {
            $favouriteListValue[] = $value['like_id'];
        }
        $favouriteListValue = implode(',', $favouriteListValue);
        //debug($favouriteListValue);exit;
        
        if (!empty($favouriteList)) {            
            $this->paginate = [
                'contain' => ['Communities', 'Children', 'Heights', 'Weights', 'MamaGotras', 'Incomes'],
                'conditions' => [
                    'AND' => [
                        "Users.id != $userId",
                        "Users.id IN ($favouriteListValue)",
                    ]
                ],
                'order' => [
                    'Users.id' => 'DESC'
                ]
            ];
        //debug($this->paginate);
        $users = $this->paginate($this->Users);
        //debug($users);
        $this->set(compact('users', 'favouriteList'));
        $this->set('_serialize', ['users']);
        }
    }

    /**
     * Interest sent method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function interestSent($isid = null)
    {
        // if (!empty($user['interest_sent'])) {
        //     $interestSentList[] = $user['interest_sent'];
        //     $interestSentId[] = $isid;
        //     $interestSentList = array_merge($interestSentList, $interestSentId);
        //     $user['interest_sent'] = implode(',', $interestSentList);
        // }else{
        //     $interestSentList[] = $user['interest_sent'] = $isid;
        //     $user['interest_sent'] = implode(',', $interestSentList);
        // }

        $interests = $this->Users->Interests->newEntity();
        $data['user_id'] = $this->Auth->User('id');
        $data['int_id'] = $isid;
        $user['username'] = $this->Auth->User('username');
        $interests = $this->Users->Interests->patchEntity($interests, $data);
        //debug($user['interest_sent']);

        if ($this->Users->Interests->save($interests)) {
            $message = 'Hi user, the user with username '.$user['username'].' is shown interest in your profile';
            $email = new Email('default');
            $email->from([$user['username'] => 'My Site'])
                ->to('gauravulhe@sanisoft.com')
                ->subject('Someone is interested in your profile.')
                ->attachments([
                    'watermark-result.png' => [
                        'file' => WWW_ROOT.'img/watermark-result.png',
                        'mimetype' => 'image/png'
                    ]
                ])
                ->send($message);

            $this->Flash->success(__('The user has been added to Interest Sent list.'));
        } else {
            $this->Flash->error(__('The user could not be add. Please, try again.'));
        }

        return $this->redirect($this->referer());
    }


    /**
     * Interest Retrive method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function interestRetrive($irid = null)
    {
        //$user = $this->Users->get($this->Auth->User('id'));
        
        // if (!empty($user['interest_sent'])) {
        //     $interestRetriveList = explode(',', $user['interest_sent']);
        //     $interestRetriveId[] = $irid;
        //     $interestRetriveList = array_diff($interestRetriveList, $interestRetriveId);
        //     $user['interest_sent'] = implode(',', $interestRetriveList);
        // }
        //debug($user['interest_sent']);
        
        $interestRetrive = $this->Users->Interests->find()->where([
            'AND' => [
                'Interests.user_id' => $this->Auth->User('id'),
                'Interests.int_id' => $irid
            ]
        ])->first();
        //debug($interestRetrive);exit;
        if ($this->Users->Interests->delete($interestRetrive)) {
            $this->Flash->success(__('The user has been retrive from to interest sent list.'));
        } else {
            $this->Flash->error(__('The user could not be add. Please, try again.'));
        }

        return $this->redirect($this->referer());
    }

    /**
     * interestSentProfile method
     *
     * @return \Cake\Network\Response|null
     */
    public function interestSentProfile()
    {
        //debug($this->Auth->User('partner_education'));
        $userData = $this->Users->get($this->Auth->User('id'));
        // $interestSentList = $userData['interest_sent'];
        // debug($interestSentList);exit;
        $userId = $userData['id'];
        
        $interestSent = $this->Users->Interests->find()->where(['Interests.user_id' => $userId])->all();
        $interestSentList = [];
        foreach ($interestSent as $key => $value) {
            $interestSentList[] = $value['int_id'];
        }
        $interestSentList = implode(',', $interestSentList);
        //debug($interestSentList);exit;
        
        if (!empty($interestSentList)) {            
            $this->paginate = [
                'contain' => ['Communities', 'Children', 'Heights', 'Weights', 'MamaGotras', 'Incomes'],
                'conditions' => [
                    'AND' => [
                        "Users.id != $userId",
                        "Users.id IN ($interestSentList)",
                    ]
                ],
                'order' => [
                    'Users.id' => 'DESC'
                ]
            ];
        //debug($this->paginate);
        $users = $this->paginate($this->Users);
        //debug($users);
        $this->set(compact('users', 'interestSentList'));
        $this->set('_serialize', ['users']);
        }
    }

    /**
     * interestReceive method
     *
     * @return \Cake\Network\Response|null
     */
    public function interestReceive()
    {
        //debug($this->Auth->User('partner_education'));
        $userData = $this->Users->get($this->Auth->User('id'));
        // $interestSentList = $userData['interest_sent'];
        // debug($interestSentList);exit;
        $userId = $userData['id'];
        
        $interestReceive = $this->Users->Interests->find()->where(['Interests.int_id' => $userId])->all();
        //debug($interestReceive);exit;
        $interestReceiveList = [];
        foreach ($interestReceive as $key => $value) {
            $interestReceiveList[] = $value['user_id'];
        }
        $interestReceiveList = implode(',', $interestReceiveList);
        //debug($interestReceiveList);exit;
        
        if (!empty($interestReceiveList)) {            
            $this->paginate = [
                'contain' => ['Communities', 'Children', 'Heights', 'Weights', 'MamaGotras', 'Incomes'],
                'conditions' => [
                    'AND' => [
                        "Users.id != $userId",
                        "Users.id IN ($interestReceiveList)",
                    ]
                ],
                'order' => [
                    'Users.id' => 'DESC'
                ]
            ];
        //debug($this->paginate);
        $users = $this->paginate($this->Users);
        //debug($users);
        $this->set(compact('users', 'interestReceiveList'));
        $this->set('_serialize', ['users']);
        }
    }

}
