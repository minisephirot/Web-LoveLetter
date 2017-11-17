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
        $__internal_27beb24cfd95da680f6aff16e2439a699320648681bc10360fc8b6bb631a675b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27beb24cfd95da680f6aff16e2439a699320648681bc10360fc8b6bb631a675b->enter($__internal_27beb24cfd95da680f6aff16e2439a699320648681bc10360fc8b6bb631a675b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_20fc088a2d0d7b80c7d6d94af8fedaee21432b97d3e5048b48999dfab62d221a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20fc088a2d0d7b80c7d6d94af8fedaee21432b97d3e5048b48999dfab62d221a->enter($__internal_20fc088a2d0d7b80c7d6d94af8fedaee21432b97d3e5048b48999dfab62d221a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_27beb24cfd95da680f6aff16e2439a699320648681bc10360fc8b6bb631a675b->leave($__internal_27beb24cfd95da680f6aff16e2439a699320648681bc10360fc8b6bb631a675b_prof);

        
        $__internal_20fc088a2d0d7b80c7d6d94af8fedaee21432b97d3e5048b48999dfab62d221a->leave($__internal_20fc088a2d0d7b80c7d6d94af8fedaee21432b97d3e5048b48999dfab62d221a_prof);

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
