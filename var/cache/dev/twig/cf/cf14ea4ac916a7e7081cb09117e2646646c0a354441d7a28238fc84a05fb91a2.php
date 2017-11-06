<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2f089b3a69169d1f04065670b6e6928fff13bb3b4137052a7be721311fd8ec82 extends Twig_Template
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
        $__internal_c7d47e6ccfbcccfc929124ea56d850c052705f2982efbfe58f485536a7c4cfa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d47e6ccfbcccfc929124ea56d850c052705f2982efbfe58f485536a7c4cfa3->enter($__internal_c7d47e6ccfbcccfc929124ea56d850c052705f2982efbfe58f485536a7c4cfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_06c3d1c045e75031e35483f33445d78e8c4e26487be5b2fc1e36a1d51efbe1de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c3d1c045e75031e35483f33445d78e8c4e26487be5b2fc1e36a1d51efbe1de->enter($__internal_06c3d1c045e75031e35483f33445d78e8c4e26487be5b2fc1e36a1d51efbe1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c7d47e6ccfbcccfc929124ea56d850c052705f2982efbfe58f485536a7c4cfa3->leave($__internal_c7d47e6ccfbcccfc929124ea56d850c052705f2982efbfe58f485536a7c4cfa3_prof);

        
        $__internal_06c3d1c045e75031e35483f33445d78e8c4e26487be5b2fc1e36a1d51efbe1de->leave($__internal_06c3d1c045e75031e35483f33445d78e8c4e26487be5b2fc1e36a1d51efbe1de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
