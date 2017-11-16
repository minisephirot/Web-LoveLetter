<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1d5733cf16b809f77d7a26f88eb1980e3ea7e0eb69bb2930da0e4f997418905b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_056fc2fe71065be0f66b193625c55744e834f42d16baf68e76d7a972b619009c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_056fc2fe71065be0f66b193625c55744e834f42d16baf68e76d7a972b619009c->enter($__internal_056fc2fe71065be0f66b193625c55744e834f42d16baf68e76d7a972b619009c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_2a22fdf8c0d58ef6fc234f4aac7728bc952b285f7f43c67b8ebe03c2f0d9eba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a22fdf8c0d58ef6fc234f4aac7728bc952b285f7f43c67b8ebe03c2f0d9eba6->enter($__internal_2a22fdf8c0d58ef6fc234f4aac7728bc952b285f7f43c67b8ebe03c2f0d9eba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_056fc2fe71065be0f66b193625c55744e834f42d16baf68e76d7a972b619009c->leave($__internal_056fc2fe71065be0f66b193625c55744e834f42d16baf68e76d7a972b619009c_prof);

        
        $__internal_2a22fdf8c0d58ef6fc234f4aac7728bc952b285f7f43c67b8ebe03c2f0d9eba6->leave($__internal_2a22fdf8c0d58ef6fc234f4aac7728bc952b285f7f43c67b8ebe03c2f0d9eba6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
