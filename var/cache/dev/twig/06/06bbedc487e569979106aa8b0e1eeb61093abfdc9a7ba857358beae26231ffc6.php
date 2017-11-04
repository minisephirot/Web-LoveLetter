<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_7a65e2a9bbf4ce00847a826ee8c05a21954b62b953fcab9da798367070afea48 extends Twig_Template
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
        $__internal_a14cb871108074c6f76f23146b1608db174c1c8a2c4af50cf2ace0b2cc41c569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a14cb871108074c6f76f23146b1608db174c1c8a2c4af50cf2ace0b2cc41c569->enter($__internal_a14cb871108074c6f76f23146b1608db174c1c8a2c4af50cf2ace0b2cc41c569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_92cefff083c61f621e720408893b3bd7136720e98e9062a8bcebb7f6b5e6e81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92cefff083c61f621e720408893b3bd7136720e98e9062a8bcebb7f6b5e6e81f->enter($__internal_92cefff083c61f621e720408893b3bd7136720e98e9062a8bcebb7f6b5e6e81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a14cb871108074c6f76f23146b1608db174c1c8a2c4af50cf2ace0b2cc41c569->leave($__internal_a14cb871108074c6f76f23146b1608db174c1c8a2c4af50cf2ace0b2cc41c569_prof);

        
        $__internal_92cefff083c61f621e720408893b3bd7136720e98e9062a8bcebb7f6b5e6e81f->leave($__internal_92cefff083c61f621e720408893b3bd7136720e98e9062a8bcebb7f6b5e6e81f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
