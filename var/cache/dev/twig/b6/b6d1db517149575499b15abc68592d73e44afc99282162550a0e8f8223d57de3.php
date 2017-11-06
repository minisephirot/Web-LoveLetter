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
        $__internal_97a35ff8752a9b2494364ac8a257037a273cddc8a801939221387d334baea278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a35ff8752a9b2494364ac8a257037a273cddc8a801939221387d334baea278->enter($__internal_97a35ff8752a9b2494364ac8a257037a273cddc8a801939221387d334baea278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5a55199395294742a187b74d50ef1f461940a51375d58e7a85b17b2213337529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a55199395294742a187b74d50ef1f461940a51375d58e7a85b17b2213337529->enter($__internal_5a55199395294742a187b74d50ef1f461940a51375d58e7a85b17b2213337529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_97a35ff8752a9b2494364ac8a257037a273cddc8a801939221387d334baea278->leave($__internal_97a35ff8752a9b2494364ac8a257037a273cddc8a801939221387d334baea278_prof);

        
        $__internal_5a55199395294742a187b74d50ef1f461940a51375d58e7a85b17b2213337529->leave($__internal_5a55199395294742a187b74d50ef1f461940a51375d58e7a85b17b2213337529_prof);

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
