<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property int $power_users
 * @property int $is_verified
 * @property int $top_producer
 * @property string $firstname
 * @property string $lastname
 * @property string $fullname
 * @property string $accounttype
 * @property string $aka
 * @property string $email
 * @property string $phone
 * @property string $password
 * @property string $role
 * @property $photo
 * @property string $photo_dir
 * @property string $photo_size
 * @property string $bio
 * @property string $facebook
 * @property string $twitter
 * @property string $instagram
 * @property string $youtube
 * @property string $address
 * @property string $state
 * @property string $zip
 * @property string $country
 * @property int $popular
 * @property int $membership
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \Muffin\Tokenize\Model\Entity\Token[] $tokens
 * @property \App\Model\Entity\Store[] $stores
 * @property \App\Model\Entity\Genre[] $genres
 * @property \App\Model\Entity\Account[] $accounts
 * @property \App\Model\Entity\Artiste[] $artistes
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Subscription[] $subscriptions
 * @property \App\Model\Entity\Mixmastering[] $mix_masterings
 * @property \App\Model\Entity\Songwriter[] $songwriters
 * @property \App\Model\Entity\Director[] $directors
 * @property \App\Model\Entity\Bankbalance $bankbalance
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Like[] $likes
 * @property \App\Model\Entity\Message[] $messages
 * @property \App\Model\Entity\Artistesrequester[] $artistesrequesters
 * @property \App\Model\Entity\Directorequest[] $directorequests
 * @property \App\Model\Entity\Swriterequest[] $swriterequests
 * @property \App\Model\Entity\Mmrequester[] $mmrequesters
 */
class User extends Entity {

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'id'=> true,
        'power_users' => true,
        'is_verified' => true,
        'top_producer' => true,
        'firstname' => true,
        'lastname' => true,
        'fullname' => true,
        'accounttype' => true,
        'aka' => true,
        'email' => true,
        'phone_code' => true,
        'phone' => true,
        'code' => true,
        'password' => true,
        'confirm_password' => true,
        'role' => true,
        'photo' => true,
        'temp' => true,
        'photo_dir' => true,
        'photo_size' => true,
        'bio' => true,
        'facebook' => true,
        'twitter' => true,
        'instagram' => true,
        'youtube' => true,
        'address' => true,
        'state' => true,
        'zip' => true,
        'country' => true,
        'popular' => true,
        'membership' => true,
        'created' => true,
        'modified' => true,
        'tokens' => true,
        'stores' => true,
        'genres' => true,
        'accounts' => true,
        'artistes' => true,
        'users' => true,
        'subscriptions' => true,
        'mix_masterings' => true,
        'songwriters' => true,
        'directors' => true,
        'bankbalance' => true,
        'comments' => true,
        'likes' => true,
        'messages' => true,
        'artistesrequesters' => true,
        'directorequests' => true,
        'swriterequests' => true,
        'mmrequesters' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password) {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }

    protected function _setConfirmPassword($password) {

        return (new DefaultPasswordHasher)->hash($password);
    }

}
