<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_efa8fe722d237c6981e1c0477dcef812008c63abe60f0b39ba370e8842ff41e1 extends Twig_Template
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
        $__internal_f2ec2b16464bc7c9a47d74c2674eeeea92bea03446b7a178caf7c7c9be4e47ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ec2b16464bc7c9a47d74c2674eeeea92bea03446b7a178caf7c7c9be4e47ea->enter($__internal_f2ec2b16464bc7c9a47d74c2674eeeea92bea03446b7a178caf7c7c9be4e47ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c1fd4a43678ce5c1f14f388602154dc34ba991bbae435a7472b8c40a41a390e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1fd4a43678ce5c1f14f388602154dc34ba991bbae435a7472b8c40a41a390e6->enter($__internal_c1fd4a43678ce5c1f14f388602154dc34ba991bbae435a7472b8c40a41a390e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f2ec2b16464bc7c9a47d74c2674eeeea92bea03446b7a178caf7c7c9be4e47ea->leave($__internal_f2ec2b16464bc7c9a47d74c2674eeeea92bea03446b7a178caf7c7c9be4e47ea_prof);

        
        $__internal_c1fd4a43678ce5c1f14f388602154dc34ba991bbae435a7472b8c40a41a390e6->leave($__internal_c1fd4a43678ce5c1f14f388602154dc34ba991bbae435a7472b8c40a41a390e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
