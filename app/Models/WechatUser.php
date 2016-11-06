<?php

namespace App\Models;

class WechatUser extends BaseModel
{
    public $timestamps = false;

    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'z_wechat_user';


    protected $guarded = [];
}
