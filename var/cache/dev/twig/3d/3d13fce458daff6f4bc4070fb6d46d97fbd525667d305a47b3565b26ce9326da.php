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
        $__internal_86625e754b913b031afe98cc90f7ff5563c4d407f6fd838bb1dba21abd1ea14f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86625e754b913b031afe98cc90f7ff5563c4d407f6fd838bb1dba21abd1ea14f->enter($__internal_86625e754b913b031afe98cc90f7ff5563c4d407f6fd838bb1dba21abd1ea14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_4d3194fc764d12480207a2b24acdf33e04874cd3015b8465e409440b9c268b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3194fc764d12480207a2b24acdf33e04874cd3015b8465e409440b9c268b7c->enter($__internal_4d3194fc764d12480207a2b24acdf33e04874cd3015b8465e409440b9c268b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_86625e754b913b031afe98cc90f7ff5563c4d407f6fd838bb1dba21abd1ea14f->leave($__internal_86625e754b913b031afe98cc90f7ff5563c4d407f6fd838bb1dba21abd1ea14f_prof);

        
        $__internal_4d3194fc764d12480207a2b24acdf33e04874cd3015b8465e409440b9c268b7c->leave($__internal_4d3194fc764d12480207a2b24acdf33e04874cd3015b8465e409440b9c268b7c_prof);

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
