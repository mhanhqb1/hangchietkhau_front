<?php
use Cake\Core\Configure;
use App\Lib\Api;

$params = $this->getParams(array(
    'aff_id' => 0,
    'slug' => $slug,
    'lp' => ''
));
$data = Api::call(Configure::read('API.url_users_productdetail'), $params);
$url = "{$data['aff_url']}?aff_sub1={$params['aff_id']}";
if (!empty($params['lp'])) {
    $urls = explode(PHP_EOL, $data['aff_news_url']);
    foreach ($urls as $u) {
        $tmp = explode(':::', $u);
        $tmp[1] = preg_replace('/\s+/', '', $tmp[1]);
        $lp = explode('?lp=', $tmp[1]);
        if ($lp[1] == $params['lp']) {
            $url = $tmp[1].'&aff_sub1='.$params['aff_id'];
            break;
        }
    }
}

return $this->redirect($url);

$this->set(compact(array(
    'data',
    'params'
)));

