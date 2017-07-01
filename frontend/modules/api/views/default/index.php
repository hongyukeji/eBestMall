<div class="api-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        这是用于动作的视图内容 "<?= $this->context->action->id ?>"。<br />
        该动作属于控制器。 "<?= get_class($this->context) ?>"<br />
        在 "<?= $this->context->module->id ?>" 模块。
    </p>
    <p>
        您可以通过编辑以下文件自定义此页面：<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>
