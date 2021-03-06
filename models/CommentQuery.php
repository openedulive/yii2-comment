<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace yuncms\comment\models;

use yii\db\ActiveQuery;

/**
 * Class CommentQuery
 * @package yuncms\comment\models
 */
class CommentQuery extends ActiveQuery
{
    /**
     * 设置查询条件
     * @return $this
     */
    public function active()
    {
        return $this->andWhere(['status' => Comment::STATUS_ACCEPTED]);
    }

    /**
     * 获取指定Model的评论
     * @param string $sourceType
     * @param int $sourceId
     * @return $this
     */
    public function source($sourceType, $sourceId)
    {
        return $this->andWhere(['source_type' => $sourceType, 'source_id' => $sourceId]);
    }
}