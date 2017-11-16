<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_29514805f766e8ba6f2f277e9cd6df4d52460ca4cc489c046f3d7cb7850c3546 extends Twig_Template
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
        $__internal_984578a97eb7cbd18ba4b5964d3a3432d4e638f55c13480be8a796d8c6068e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_984578a97eb7cbd18ba4b5964d3a3432d4e638f55c13480be8a796d8c6068e5e->enter($__internal_984578a97eb7cbd18ba4b5964d3a3432d4e638f55c13480be8a796d8c6068e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d3f6d38a86e15985b67b7025104d58cb70f77a44083bd8d76bd33e945e1a4004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f6d38a86e15985b67b7025104d58cb70f77a44083bd8d76bd33e945e1a4004->enter($__internal_d3f6d38a86e15985b67b7025104d58cb70f77a44083bd8d76bd33e945e1a4004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_984578a97eb7cbd18ba4b5964d3a3432d4e638f55c13480be8a796d8c6068e5e->leave($__internal_984578a97eb7cbd18ba4b5964d3a3432d4e638f55c13480be8a796d8c6068e5e_prof);

        
        $__internal_d3f6d38a86e15985b67b7025104d58cb70f77a44083bd8d76bd33e945e1a4004->leave($__internal_d3f6d38a86e15985b67b7025104d58cb70f77a44083bd8d76bd33e945e1a4004_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
