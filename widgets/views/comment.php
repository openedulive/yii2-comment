<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php if (Yii::$app->getUser()->getIsGuest()): ?>
    请登录
<?php else: ?>

    <?php
    /** @var ActiveForm $form */
    $form = ActiveForm::begin(['action' => Url::to(['/comment/default/create']),]);
    ?>
    <?=$form->field($model,'source_type')?>
    <?=$form->field($model,'source_id')?>
    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'content')
        ->textarea(['rows' => 6])
        ->hint(Yii::t('question', 'Markdown powered content'))
        ->label(''); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('question', 'Answer') : Yii::t('question', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end() ?>

<?php endif ?>