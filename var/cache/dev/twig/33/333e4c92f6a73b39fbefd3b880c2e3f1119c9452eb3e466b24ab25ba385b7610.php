<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6f4ce033039f6c51d9532719449c55d4a4f2c11f37f9fcb7c35eb01a47ee1679 extends Twig_Template
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
        $__internal_7f715dc8b7c997e38954b34c3491cb942fb83424bf63a0b61bf958be56859959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f715dc8b7c997e38954b34c3491cb942fb83424bf63a0b61bf958be56859959->enter($__internal_7f715dc8b7c997e38954b34c3491cb942fb83424bf63a0b61bf958be56859959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_7e831685025d0eac0a1acae9f6536c6ac554e75194c210de7e42e7231e76adaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e831685025d0eac0a1acae9f6536c6ac554e75194c210de7e42e7231e76adaf->enter($__internal_7e831685025d0eac0a1acae9f6536c6ac554e75194c210de7e42e7231e76adaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7f715dc8b7c997e38954b34c3491cb942fb83424bf63a0b61bf958be56859959->leave($__internal_7f715dc8b7c997e38954b34c3491cb942fb83424bf63a0b61bf958be56859959_prof);

        
        $__internal_7e831685025d0eac0a1acae9f6536c6ac554e75194c210de7e42e7231e76adaf->leave($__internal_7e831685025d0eac0a1acae9f6536c6ac554e75194c210de7e42e7231e76adaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
